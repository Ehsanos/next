@props(['options' =>[]])

<select {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>


    @if(session('lang')=="en")
        @foreach($options as $value)
            <option value="{{$value->id}}">{{$value->name_en}}</option>
        @endforeach
    @else
        @foreach($options as $value)
            <option value="{{$value->id}}">{{$value->name}}</option>
        @endforeach
    @endif

</select>
