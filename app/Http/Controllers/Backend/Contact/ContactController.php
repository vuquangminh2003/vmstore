<?php

namespace App\Http\Controllers\Backend\Contact;
use App\Models\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Interfaces\ContactServiceInterface  as ContactService;
use App\Repositories\Interfaces\ContacttRepositoryInterface  as ContactRepository;
// use App\Http\Requests\Post\StorePostRequest;
// use App\Http\Requests\Post\UpdatePostRequest;
use App\Classes\Nestedsetbie;
use App\Models\Language;

class ContactController extends Controller
{
 

    public function __construct(
       
    ){
        
        
    }
    public function index(Request $request)
{
    $query = Contact::query();

    if ($request->filled('keyword')) {
        $keyword = strtolower($request->keyword);

        if (strpos($keyword, 'chưa phản hồi') !== false) {
            $query->where('is_replied', 0);
        } elseif (strpos($keyword, 'đã phản hồi') !== false) {
            $query->where('is_replied', 1);
        } else {
            $query->where(function ($q) use ($keyword) {
                $q->where('fullname', 'LIKE', "%{$keyword}%")
                  ->orWhere('email', 'LIKE', "%{$keyword}%")
                  ->orWhere('phone', 'LIKE', "%{$keyword}%")
                  ->orWhere('subject', 'LIKE', "%{$keyword}%")
                  ->orWhere('message', 'LIKE', "%{$keyword}%");
            });
        }
    }

    $contacts = $query->orderBy('created_at', 'desc')->paginate($request->perpage ?? 20);

    // ⛳ Đây là chỗ để debug:
    dd($contacts);
die('Kiểm tra tới đây');
    return view('backend.contacts.index', compact('contacts'));
}

public function delete($id){
        $this->authorize('modules', 'contacts.destroy');
        $config['seo'] = __('messages.contacts');
        $contacts = $this->contactsRepository->getContactsById($id, $this->language);
        $template = 'backend.contacts.post.delete';
        return view('backend.dashboard.layout', compact(
            'template',
            'contacts',
            'config',
        ));
    }
public function destroy($id){
        if($this->contactsService->destroy($id)){
            return redirect()->route('contacts.index')->with('success','Xóa bản ghi thành công');
        }
        return redirect()->route('contacts.index')->with('error','Xóa bản ghi không thành công. Hãy thử lại');
    }
}
