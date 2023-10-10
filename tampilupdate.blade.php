<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="form-group">
    <label for="position-option">Posisi</label>
    <select class="form-control" id="position-option" name="position_id">
       @foreach ($positions as $position)
          <option value="{{ $position->id }}">{{ $position->position_name }}</option>
       @endforeach
    </select>
  </div>
</body>
</html>