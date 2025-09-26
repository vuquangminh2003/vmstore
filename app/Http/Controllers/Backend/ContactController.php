<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactReply;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function index(Request $request)
    {
        // dd('entered index');
        try {
            $query = Contact::query();

        if ($request->has('keyword')) {
            $keyword = strtolower(trim($request->keyword));

            if (str_contains($keyword, 'chưa phản hồi') || str_contains($keyword, 'chua phan hoi')) {
                $query->where('is_replied', 0);
            } elseif (str_contains($keyword, 'đã phản hồi') || str_contains($keyword, 'da phan hoi')) {
                $query->where('is_replied', 1);
            } else {
                $query->where(function ($q) use ($keyword) {
                    $q->where('fullname', 'like', "%{$keyword}%")
                      ->orWhere('email', 'like', "%{$keyword}%")
                      ->orWhere('phone', 'like', "%{$keyword}%")
                      ->orWhere('subject', 'like', "%{$keyword}%")
                      ->orWhere('message', 'like', "%{$keyword}%");
                });
            }
        }
            $contacts = $query->latest()->paginate(10);
            //$contacts = Contact::latest()->paginate(10);
            $template = 'backend.contacts.index';
            $config = [
                'seo' => [
                    'index' => [
                        'title' => 'Quản lý liên hệ',
                        'table' => 'Danh sách liên hệ'
                    ]
                ],
                'model' => 'Contact'
            ];

            return view('backend.dashboard.layout', compact(
                'template',
                'config',
                'contacts'
            ));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
    
    public function showReplyForm($id)
{
    $contact = Contact::findOrFail($id);
    $template = 'backend.contacts.reply';
    $config['seo'] = ['title' => 'Phản hồi liên hệ'];
    return view('backend.dashboard.layout', compact('contact', 'template', 'config'));
}

public function sendReply(Request $request, $id)
{
    $contact = Contact::findOrFail($id);

    $request->validate([
        'reply_message' => 'required|string'
    ]);

    // Gửi mail
    \Mail::to($contact->email)->send(new \App\Mail\ContactReply($contact, $request->reply_message));

    // Cập nhật trạng thái
    $contact->is_replied = true;
    $contact->reply_message = $request->reply_message;
    $contact->save();

    return redirect()->route('contacts.index')->with('success', 'Đã phản hồi thành công!');
}
// public function delete($id){
//         $this->authorize('modules', 'contacts.destroy');
//         $config['seo'] = __('messages.contacts');
//         $contacts = $this->contactsRepository->getContactsById($id, $this->language);
//         $template = 'backend.contacts.contacts.delete';
//         return view('backend.dashboard.layout', compact(
//             'template',
//             'contacts',
//             'config',
//         ));
//     }
// public function delete($id)
// {
//     $contact = \App\Models\Contact::findOrFail($id); 
//     $config['seo'] = __('messages.contacts');
//     $config = [
//     'seo' => [
//         'create' => [
//             'title' => 'Xóa liên hệ',
//         ]
//     ]
// ];

//     $template = 'backend.contacts.delete';

//     return view('backend.dashboard.layout', compact(
//         'template',
//         'contact', 
//         'config',
//     ));
// }

// public function destroy($id){
//         if($this->contactsService->destroy($id)){
//             return redirect()->route('contacts.index')->with('success','Xóa bản ghi thành công');
//         }
//         return redirect()->route('contacts.index')->with('error','Xóa bản ghi không thành công. Hãy thử lại');
//     }
public function destroy($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return response()->json(['success' => true, 'message' => 'Đã xóa liên hệ thành công.']);
}

}
