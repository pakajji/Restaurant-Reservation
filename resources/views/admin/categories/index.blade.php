<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.categories.create')}}" class="px-4 py-2 bg-yellow-400 hover:bg-yellow-500 rounded-lg text-black">Create Category</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ขึ้นไหมเนี่ย?</td>
                                <td>ก็ขึ้นนี่</td>
                                <td>ทำไมใน foreach ไม่ขึ้น?</td>
                            </tr>
                            @foreach ($categories as $category)
                            <tr>
                                <td><img src="{{Storage::url($category->image)}}" class="w-16 h-16 rounded"></td>
                                <td>{{$catagory->name}}</td>
                                <td>{{$catagory->description}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
