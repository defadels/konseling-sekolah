
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('materialpro/assets/images/favicon.png')}}">
    <title>Pengaduan Berhasil Dikirim</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
</head>

<body style="margin:0px; background: #f8f8f8; ">
    <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
        <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                <tbody>
                    <tr>
                        <td style="vertical-align: top; padding-bottom:30px;" align="center"><a href="#" target="_blank"><img src="{{asset('materialpro/assets/images/logo-icon1.png')}}" alt="xtreme admin" style="border:none"><br/>
                            <img src="{{asset('materialpro/assets/images/logo-text1.png')}}" alt="xtreme admin" style="border:none"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="background:#2962FF; padding:20px; color:#fff; text-align:center;">
                            Bimbingan Konseling Anda Berhasil Terkirim</td>
            
                    </tr>
                </tbody>
            </table>
            <div style="padding: 40px; background: #fff;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td>
                                <p>@if(session()->has('message')) <b>{{session()->get('message')}}@endif</b></p>
                                <p>Mohon kesediannya untuk menunggu tanggapan dan respon dari guru penanggung jawab.</p>
                                <center>
                                    <a href="{{route('front')}}" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;">Kembali ke Beranda</a>
                                </center>
                                <b>- Terima Kasih</b> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                <p> Powered by warppixel
                    <br>
                    <a href="javascript: void(0);" style="color: #b2b2b5; text-decoration: underline;">Unsubscribe</a> </p>
            </div> --}}
        </div>
    </div>
</body>

</html>