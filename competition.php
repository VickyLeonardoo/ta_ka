<div class="exp-cover">
<div class="sec-title">
<style type="text/css">
        .contai{ 
        position: absolute;
        top: 670px;
        left: 100px;
        right: 100px;
        bottom: 0px;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 5px;
    }
    .contai h2 span{
        display: block;
        font-size: 0.2em;
        font-weight: 300;
        letter-spacing: 6px;
    }
    .count{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }
    .count div{
        position: relative;
        width: 100px;
        height: 90px;
        line-height: 70px;
        text-align: center;
        background: linear-gradient(#256147, #256147);
        color: #fff;
        margin: 0 10px;
        font-size: 2.5em;
        font-weight: 500;
    }
    .count div:before{
        content: '';
        position: absolute;
        bottom: -30px;
        left: 0;
        width: 100%;
        height: 50px;
        background: #256147;
        color: #fff;
        font-size: 0.35em;
        line-height: 35px;
        font-weight: 300;
    }
    .count #hari:before{
        content: 'Hari';
    }
    .count #jam:before{
        content: 'Jam';
    }
    .count #menit:before{
        content: 'Menit';
    }
    .count #detik:before{
        content: 'Detik';
    }
          </style>
                                        <h2>Hitung Mundur Pendaftaran</h2>
                                  </div>
                                    <div class="contai">
                                        
                                
                                        <div class="count">
                                            <div id="hari"></div>
                                            <div id="jam"></div>
                                            <div id="menit"></div>
                                            <div id="detik"></div>
                                        </div>
                                    </div>
                                
                                <script type="text/javascript">
                                
                                var countDate = new Date('Oct 8 2021 23:59:59').getTime();
                                
                                function newYear(){
                                    var now = new Date().getTime();
                                    gap = countDate - now;
                                
                                    var detik = 1000;
                                    var menit = detik * 60;
                                    var jam = menit * 60;
                                    var hari = jam * 24;
                                
                                    var h = Math.floor(gap / (hari));
                                    var j = Math.floor( (gap % (hari)) / (jam) );
                                    var m = Math.floor( (gap % (jam))  / (menit) );
                                    var d = Math.floor( (gap % (menit))  / (detik) );
                                
                                    document.getElementById('hari').innerText = h;
                                    document.getElementById('jam').innerText = j;
                                    document.getElementById('menit').innerText = m;
                                    document.getElementById('detik').innerText = d;
                                }
                                setInterval( function(){
                                    newYear();
                                }, 1000);
                                </script><br><br><br><br><br><br><br><br>
                                <div class="sec-title">
                                <li>
                                          <a href="https://www.polibatam.ac.id/"><i class="fas fa-cloud-download-alt"></i> Download Panduan</a>
                                      </li>
                              </div>
                                   <div class="service no-margin row">
                                        <div class="col-sm-2 resume-dat serv-logo">
                                              <h6> <img class="d-block w-100" src="assets/images/LOGO 4.png"></h6>
                                              <a href="https://www.polibatam.ac.id/"><p></p></a>
                                        </div>
                                        <div class="col-sm-9 rgbf">
                                        <br><br> <a href="?url=movie"><h5>Musabaqah Tilawatil Qur'an</h5></a>
                                              <p></p>
                                        </div>
                                        </div><br>
                                        <div class="service no-margin row">
                                        <div class="col-sm-2 resume-dat serv-logo">
                                        <h6> <img class="d-block w-100" src="assets/images/LOGO 2.png"></h6>
                                              <a href="https://www.polibatam.ac.id/"><p></p></a>
                                        </div>
                                        <div class="col-sm-9 rgbf">
                                        <br><br><a href="?url=magazine"><h5>Musabaqah Tartilil Qur'an</h5></a>
                                              <p></p>
                                        </div>
                                        </div><br>
                                        <div class="service no-margin row">
                                        <div class="col-sm-2 resume-dat serv-logo">
                                        <h6> <img class="d-block w-100" src="assets/images/LOGO 7.png"></h6>
                                              <a href="https://www.polibatam.ac.id/"><p></p></a>
                                        </div>
                                        
                                        <div class="col-sm-9 rgbf">
                                        <br><br><a href="?url=scientific"><h5>Musabaqah Hifzhil Qur'an</h5></a>
                                              <p></p>
                                        </div>
                                        </div><br>
                                        <div class="service no-margin row">
                                        <div class="col-sm-2 resume-dat serv-logo">
                                        <h6> <img class="d-block w-100" src="assets/images/LOGO 6.png"></h6>
                                              <a href="https://www.polibatam.ac.id/"><p></p></a>
                                        </div>
                                        <div class="col-sm-9 rgbf">
                                        <br><br><a href="?url=speech"><h5>Musabaqah Syarhil Qur'an</h5></a>
                                              <p></p>
                                        </div>
                                        </div><br>
                                        