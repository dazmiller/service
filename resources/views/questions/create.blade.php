@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>New Question</h1>

                @include('errors.list')

                {!! Form::open(['url' => action("QuestionsController@store")]) !!}

                <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Enter question description', 'rows' => 4]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('answer_description_1', 'Answer Description 1') !!}
                    {!! Form::textarea('answer_description_1', null, ['class'=>'form-control', 'placeholder'=>'Enter answer variant', 'rows' => 2]) !!}
                    <label class="radio-inline">{!! Form::radio('answer_is_correct_1', true, null) !!} correct</label>
                    <label class="radio-inline">{!! Form::radio('answer_is_correct_1', false, null) !!} incorrect</label>
                </div>
                <div class="form-group">
                    {!! Form::label('answer_description_2', 'Answer Description 2') !!}
                    {!! Form::textarea('answer_description_2', null, ['class'=>'form-control', 'placeholder'=>'Enter answer variant', 'rows' => 2]) !!}
                    <label class="radio-inline">{!! Form::radio('answer_is_correct_2', true, null) !!} correct</label>
                    <label class="radio-inline">{!! Form::radio('answer_is_correct_2', false, null) !!} incorrect</label>
                </div>
                <div class="form-group">
                    {!! Form::label('answer_description_3', 'Answer Description 3') !!}
                    {!! Form::textarea('answer_description_3', null, ['class'=>'form-control', 'placeholder'=>'Enter answer variant', 'rows' => 2]) !!}
                    <label class="radio-inline">{!! Form::radio('answer_is_correct_3', true, null) !!} correct</label>
                    <label class="radio-inline">{!! Form::radio('answer_is_correct_3', false, null) !!} incorrect</label>
                </div>
                <div class="form-group">
                    {!! Form::label('answer_description_4', 'Answer Description 4') !!}
                    {!! Form::textarea('answer_description_4', null, ['class'=>'form-control', 'placeholder'=>'Enter answer variant', 'rows' => 2]) !!}
                    <label class="radio-inline">{!! Form::radio('answer_is_correct_4', true, null) !!} correct</label>
                    <label class="radio-inline">{!! Form::radio('answer_is_correct_4', false, null) !!} incorrect</label>
                </div>

                <div class="form-group">
                    @foreach(App\Topic::all() as $topic)
                        <label class="radio-inline">
                            {!! Form::radio('topic_id', $topic->id, null, ['id'=>$topic->id]) !!}
                            {{ $topic->title }}
                        </label>
                     @endforeach
                </div>

                {!! Form::submit('Create Question', ['class'=>'btn btn-primary btn-block']) !!}

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop