<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{route('admin.menus.index')}}" class="px-4 py-2 bg-yellow-400 hover:bg-yellow-500 rounded-lg text-black">Menu Index</a>
            </div>
            <div class="m-2 p-2">
                <form>
                    <div class="form-group">
                        <label for="image">Image</label><br>
                        <input type="file" class="form-control-file" id="importImage">
                      </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                      </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Description</label>
                        <input type="text" class="form-control pb-8" id="formGroupExampleInput" placeholder="Example input">
                      </div>
                      <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-yellow-400 hover:bg-yellow-500 rounded-lg text-black">Store</button>
                      </div>
                  </form>
            </div>
        </div>
    </div>
</x-admin-layout>
