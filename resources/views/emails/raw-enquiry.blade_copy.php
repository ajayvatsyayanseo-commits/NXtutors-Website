<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry</title>
</head>
<body>

 <table align="center" width="85%" style="background:#fff;   border: 1px solid #000;" >

 
                                    <tr style="background:#fff none repeat scroll 0 0; border:1px solid #009;">

 
                                           <td height="153" width="60%">
 
                                                   <table   align="left" width="100%" >

 

                                                        <tr>             
 
                                                <td align="center"><a href="{{ url('/') }}"><img src="{{ asset('public/storage/logos/' . $setting->logo) }}"  style="width:200px; height:150px;"  ></a></td>

 
                                                        </tr> 
 
                                                   </table>               

 

                                             </td>

 
                                     </tr>


 

                             <td height="210" width="60%"><table width="100%" height="208" >
 

                               <tr>

 

                               <td height="88" align="center"><table width="100%" height="190" >


 

                                 <tr>

 

                                   <td  style="background:#fff none repeat scroll 0 0; " height="39">Hi Admin,</td>
 

                                 </tr>

 
                                 <tr>
 
                                   <td  height="31" align="center" style="color: #000; font-family: georgia;  font-size: 20px;  font-weight: bold;">Contact Request</td>

 
                                 </tr>

 
                                 <tr>

  
                                   <td height="38"> Name = {{ $name }} </td>

 

                                 </tr>
                                  
 
                                  <tr>

 
                                   <td height="38"> Email = {{ $email }} </td>
 
                                 </tr>

                                 <tr>

 
                                   <td height="38"> Phone = {{ $phone }} </td>
 
                                 </tr>
  
 
                                  <tr>
 
                                   <td height="38"> Message = {{ $messageText }}</td>
 

                                 </tr>
 

                                 </table></td>

 

                               </tr>
 
                             </table></td>
 
                    <tr style="background:#fff none repeat scroll 0 0;  border-top: 1px solid;">
 

                                   <td height="153" style="background:#fff none repeat scroll 0 0;  border-top: 1px solid;">

 
                                       <table   align="left" >
 
                                            <tr>             

 
                                                <td>Thanks & Regards</td>
 
                                            </tr> 

 

                                            <tr>             
 

                                                <td>{{ $name }}</td>

 
                                            </tr> 


 

                                       </table>               
 

                                 </td>

 
                       </tr>
 
                          <tr style="background: #383330 none repeat scroll 0 0; border: 1px solid #009;  color: #fff !important; height:52px;">

 
                                       <td height="30">

 

                                           <table   align="center" >
 

                                                <tr>             

 
                                                    <td><a href="{{ url('/') }}" style=" color: #fff;  font-family: Georgia;  font-size: 19px;   margin-right: 31px;   text-decoration: none;">{{ $setting->name }}</a></td>

 

                                                      <td align="right" style="float: right; margin-top: -15px;  position: absolute; width: 13%;">&nbsp;</td>
 
                                                </tr> 
 
                                           </table>               
 
                                     </td>
 
                           </tr>

 

</table> 

                 </body>
</html>
