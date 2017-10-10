@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Postar</div>
                <div class="panel-body">
                    {{Form::textarea('post', null, ['id' => 'postText', 'class' => "form-control", "style" => "resize: none", "rows" => 3, "maxlength" => 140])}}
                    <div class="alert alert-danger small hidden" style="margin-top: 10px" id="post-error">Insira algum texto antes de postar</div>
                    <button class="btn btn-default pull-right" style="margin-top: 10px" id="post">Postar :)</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" >
                    <div id="posts">

                    </div>
                    <div id="loading" class="cssload-container">
                        <div class="cssload-whirlpool"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
