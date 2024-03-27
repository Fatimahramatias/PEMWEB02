<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
</head>
<body>
    
</body>
</html>
<fieldset class="mx-5 border p-4 mt-5">
    <legend>Form Nilai Ujian</legend>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <form method="POST" action="data_form.php" method="post">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <input id="nim" name="nim" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="matakuliah" class="col-4 col-form-label">Pilih MK</label>
            <div class="col-8">
                <select id="matakuliah" name="matakuliah" class="custom-select" required="required">
                    <option value="Pemograman Web 2">Pemograman Web 2</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Statistika">Statistika</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label">Nilai</label>
            <div class="col-8">
                <input id="nilai" name="nilai" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
</fieldset>
</form>