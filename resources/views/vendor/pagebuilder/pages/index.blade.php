<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>
    <div class="container xl mx-auto mt-5 py-5">
        <div class="flex flex-col relative bg-white rounded border border-gray-300">
            <div class="flex-auto p-5">
                <div class="grid grid-cols-2">
                    <div>
                        <h3 class="mb-3 text-xl"><!-- your title here --></h3>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('pagebuilder.pages.create') }}" class="btn btn-primary btn-small float-right">
                            <i class="glyphicon glyphicon-plus"></i> @lang('pagebuilder::crud.create_button')
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-auto p-5">
                @include('pagebuilder::notifications')
                @if($articles->isEmpty())
                @lang('pagebuilder::crud.no_entries')
                @else
                <table class="w-full mb-4 text-gray-900 shadow-sm">
                    <thead>
                        <tr class="bg-gray-200 border-t border-b">
                            <th class="text-left p-2 font-bold">#</th>
                            <th class="text-left p-2 font-bold">Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr class="border-b">
                            <td class="p-2">{{$article->id}}</td>
                            <td class="p-2">{{$article->name}}</td>
                            <td class="p-2 text-right">
                                <div class="flex justify-end rounded-lg text-xs mb-1" role="group">
                                    <a class="bg-green-500 text-white hover:bg-green-400 rounded-l-lg px-2 py-1 text-xs mx-0 outline-none focus:shadow-outline" href="{{ route('pagebuilder.pages.edit',$article->id) }}">
                                        <i class="glyphicon glyphicon-pencil"></i> @lang('pagebuilder::crud.edit')
                                    </a>
                                    <form
                                        action="{{ route('pagebuilder.pages.destroy',$article->id) }}"
                                        method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="bg-red-500 text-white hover:bg-red-400 rounded-r-lg px-2 py-1 text-xs mx-0 outline-none focus:shadow-outline"
                                                type="submit">@lang('pagebuilder::crud.delete')</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
