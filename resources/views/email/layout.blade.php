<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width"/>
  <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Lato:400,700);
    <?php include(public_path() . '/css/zurb.css'); ?>
    <?php include(public_path() . '/css/custom.css'); ?>
  </style>
</head>
<body>
  <table class="body">
    <tr>
      <td class="center" align="center" valign="top">
        <center>
          @yield ('lead')

          <table class="container">
            <tr>
              <td>
                @include ('email.partials.header')

                @yield ('content')

                <table class="row signature">
                  <tr>
                    <td class="wrapper last">
                      <table class="twelve columns">
                        <tr>
                          <td class="three sub-columns image">
                            <img src="https://s3.amazonaws.com/f.cl.ly/items/082y1T1h3o360u2a3m0Z/me-circle.png" style="width:100px;height:100px;">
                          </td>
                          <td class="nine sub-columns">
                            <br>
                            <p>Thanks for for reading! See you next time. :)<br>
                            -Matt</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>

<!--
                <table class="row outbound-share">
                  <tr>
                    <td class="wrapper last">
                      <table class="twelve columns">
                        <tr>
                          <td class="center" align="center">
                            Share buttons
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                -->

                <table class="row footer">
                  <tr>
                    <td class="wrapper">

                      <table class="six columns">
                        <tr>
                          <td class="left-text-pad">

                            <p>Email: <a href="mailto:matt@mattstauffer.co">matt@mattstauffer.co</a></p>

                            <p>Twitter: <a href="http://twitter.com/stauffermatt">@stauffermatt</a></p>

                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                    <td class="wrapper last">

                      <table class="six columns">
                        <tr>
                          <td class="last right-text-pad">
                            <p>You're receiving this email because you signed up for it at <a href="http://mattstauffer.co/">mattstauffer.co</a></p>

                            <p style="text-align: right;">Powered by <a href="https://sendy.co/?ref=1DZsV">Sendy</a> | <webversion>View on Web</webversion> | <unsubscribe>Unsubscribe</unsubscribe></p>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

              </td>
            </tr>
          </table>

        </center>
      </td>
    </tr>
  </table>
</body>
</html>
