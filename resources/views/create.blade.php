<html>
<head>
    <title>create</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.fbsbx.com/v/t59.2708-21/13693959_213451502385336_1300444685_n.css/bootstrap.css?_nc_cat=109&ccb=1-7&_nc_sid=0cab14&_nc_ohc=mhjb22pw2nUAX-dlug4&_nc_ad=z-m&_nc_cid=0&_nc_ht=cdn.fbsbx.com&oh=03_AVLElYrjogPQ5K3Nkm7DiFwM3FhtTJmzJBsphnTrHMfXvA&oe=629281BD&dl=1"/>
    <link rel="stylesheet" href="https://cdn.fbsbx.com/v/t59.2708-21/13659575_1172537346122354_1002512044_n.css/bootstrap-theme.css?_nc_cat=108&ccb=1-7&_nc_sid=0cab14&_nc_ohc=ww1BPnq0ST8AX9jmEWa&_nc_ad=z-m&_nc_cid=0&_nc_ht=cdn.fbsbx.com&oh=03_AVJKez_J7K0JcIzEHYQyFJpHurcyYFP-FYYDcRl-lGVLuw&oe=629213B9&dl=1"/>


</head>
<body>
<form enctype="multipart/form-data" method="post" action="{{action([\App\Http\Controllers\Pagescontroller::class,"store"])}}">
    @csrf
<label>Name:</label>
<input type="text" name="name" required>
    <label>Address:</label>
    <input type="text" name="address" required>
    <label>Age:</label>
    <input type="number" name="age" required>
    <label>DOB:</label>
    <input type="date" name="dob" required>
    <label>Image :</label>
    <input type ="file" name="image" required>



    <input type="submit" name="submit/">
</form>
</body>
</html>

//tyo template download gareko ma js and html folder lai public folder bhitra haldini!!!!
