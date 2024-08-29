<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <h1>Posts</h1> --}}
  
                           
                    {{-- <ul>
                        @foreach($posts as $post)
                            <li>
                                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </li>
                        @endforeach
                    </ul> --}}
                  
      
                
                    <div class="p-20 bg-blue-100" style="padding:15px; background-color: #EAEBEF;">
                        <br>
                        <a href="{{ route('posts.create') }}"><button style="border-style: solid; border-color: black; border-width: 1px; padding: 10px; background-color: white; color: black; font-size: 20px; border-radius: 5px;">Create New Post</button></a>
                        <br>

                        
                        @foreach($posts as $post)
                        <br>
                        
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                          <h2 class="text-2xl font-bold mb-2 text-gray-800">{{ $post->title }}</h2>
                          {{-- <p class="text-gray-700">{{ $post->body }}</p> --}}
                          <a href="{{ route('posts.show', $post) }}">Show</a>
                          <a href="{{ route('posts.edit', $post) }}">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                      
                      @endforeach   
                    </div>

</x-app-layout>