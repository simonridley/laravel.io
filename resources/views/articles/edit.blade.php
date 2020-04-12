@title('Edit your article')

@extends('layouts.default')

@section('content')
    <div class="container mx-auto p-4 flex justify-center">
        <div class="w-full md:w-2/3 xl:w-1/2">
            <div class="md:p-4 md:border-2 md:rounded md:bg-gray-100">
                @include('articles._form', [
                    'route' => ['articles.update', $article->slug()],
                    'method' => 'PUT',
                ])
            </div>
        </div>
    </div>
@endsection
