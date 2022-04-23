<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-print.css') }}">
  <style>
    @page { size: auto;  margin: 0mm; }
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      $('button.disable-print').trigger('click');
    })
  </script>
</head>
<body>

<div class="container">
    <div class="row mt-5 text-center">
      <div id="qr-code-area">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td><img src="{{ asset('assets/images/school-logo-min.jpg') }}" style="max-height:100px;" /></td>
              <td>
                <h3>Holy Name High School, Colaba</h3>
                <p><strong>Address: </strong> The Name Academy Acting School in mumbai</p>
              </td>
            </tr>
          </thead>
          @if($reception_records)
            @foreach($reception_records as $name => $value)
            <tr>
              <th>{{ str_replace('_', ' ', ucfirst($name)) }}</th>
              <td>{{ $value }}</td>
            </tr>
            @endforeach
            <tr>
              <th>QR Code</th>
              <td>{!! $qrcode !!}</td>   
            </tr>
          @endif          
        </table>
      </div>
      <br><br>

      <button style="visibility: hidden;opacity: 0;" class="btn btn-primary btn-lg disable-print" type="button" onclick="return qrCodePrint();">Print</button>
    </div>	
</div>
<script type="text/javascript">
function qrCodePrint() 
{
window.print();
}
</script>
</body>
</html>
