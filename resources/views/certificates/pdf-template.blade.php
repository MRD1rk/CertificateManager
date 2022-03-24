<! DOCTYPE html>
<html lang="en">
<head>
    <title>This certificate entitles you to take courses at our training centers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body {
            font-family: DejaVu Sans;
        }
    </style>
</head>
<body>
<div style="width:600px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
    <div style="width:550px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
        <span style="font-size:32px; font-weight:bold">This certificate entitles you to take courses at our training centers</span>
        <br><br>
        <span style="font-size:25px"><i>Issued in the name</i></span>
        <br><br>
        <span style="font-size:30px"><b>{{ $certificate['studentFirstname'] . ' '. $certificate['studentMiddlename'] . ' ' . $certificate['studentLastname'] }}</b></span><br/><br/>
        <span style="font-size:25px"><i>eligible for the course</i></span> <br/>
        <span style="font-size:30px"><b>{{ $certificate['courceName'] }}</b></span> <br/>
        <span style="font-size:25px"><i>Cource valid up to:</i></span><br>
        <span style="font-size:30px"><b>{{ $certificate['certificateDateEnd'] }}</b></span>
    </div>
</div>
</body>
</html>
