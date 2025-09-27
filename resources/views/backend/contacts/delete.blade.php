@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])
@include('backend.dashboard.component.formError')
{{-- <form action="{{ route('contacts.destroy', $post->id) }}" method="post" class="box"> --}}
<form action="{{ route('contacts.destroy', $contact->id) }}" method="post" class="box">

   {{-- @include('backend.dashboard.component.destroy', ['model' => $post]) --}}
   @include('backend.dashboard.component.destroy', ['model' => $contact])

</form>
