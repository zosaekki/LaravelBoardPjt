<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($data) ? '수정' : '저장' }}</title>
</head>
<body>
    <h1>{{ isset($data) ? '수정' : '저장' }}</h1>
    <form action="{{ isset($data) ? route('boards.update') : route('boards.store') }}" method="POST">
        <input type="hidden" name="id" value="{{ isset($data) ? $data->id : 0 }}">
        <div><label>Title : <input type="text" name="title" value="{{ isset($data) ? $data->title : '' }}"></label></div>
        <div><label>Ctnt : <textarea name="ctnt">{{ isset($data) ? $data->ctnt : '' }}</textarea></label></div>
        <input type="submit" value="{{ isset($data) ? '수정' : '저장' }}">
        @csrf <!-- p.106 보안쪽? 토큰? -->
    </form>
</body>
</html>