<html>
    <head>
        <title>Certificate</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body style="margin: 10px auto; text-align: center;">
        <div style="margin: 10px auto 10px auto; text-align: center; font-family: Georgia, Times New Roman, serif; width: 1040px; height: 1800px; position: relative;">
            <div style="position: absolute; top: 10px; left: 0;"><img src="{{ asset('assets/pdf/images/crf-frame.png') }}" style="width: 1040px;height: 900px;" /></div>
            <div style="padding: 120px 80px 20px 80px;">
                <div class="logo"><img class="aligncenter size-full wp-image-33" alt="logo" src="{{ asset('assets/images/school-logo-min.jpg') }}" /></div>
                <div class="certificate-content">
                    {!! $certificate_contents !!}
                </div>
            </div>
        </div>
    </body>
</html>
