<?php
require_once ('libraries/Mobile-Detect-master/Mobile_Detect.php');
$detect = new Mobile_Detect();
?>
<script src="js/jsHyundai.js" type="text/javascript"></script>

<script>
    $(document).ready(function ()
    {
        //   PARTE 1
        $("#descripParte_1").hide();
        $("#conectorParte1").hide();

        $('#parte_1').hover(
                function ()
                {
                    $("#descripParte_1").fadeIn(500);
                    $("#conectorParte1").fadeIn(500);
                },
                function ()
                {
                    $("#descripParte_1").fadeOut(100);

                    $("#conectorParte1").fadeOut(100);
                }
        );

        //  PARTE 2
        $("#descripParte_2").hide();
        $("#conectorParte2").hide();
        $('#parte_2').hover(
                function ()
                {
                    $("#descripParte_2").fadeIn(500);
                    $("#conectorParte2").fadeIn(500);
                },
                function ()
                {
                    $("#descripParte_2").fadeOut(100);
                    $("#conectorParte2").fadeOut(100);
                }
        );

        //  PARTE 3
        $("#descripParte_3").hide();
        $("#conectorParte3").hide();
        $('#parte_3').hover(
                function ()
                {
                    $("#descripParte_3").fadeIn(500);
                    $("#conectorParte3").fadeIn(500);
                },
                function ()
                {
                    $("#descripParte_3").fadeOut(100);
                    $("#conectorParte3").fadeOut(100);
                }
        );

        //  PARTE 4
        $("#descripParte_4").hide();
        $("#conectorParte4").hide();
        $('#parte_4').hover(
                function ()
                {
                    $("#descripParte_4").fadeIn(500);
                    $("#conectorParte4").fadeIn(500);
                },
                function ()
                {
                    $("#descripParte_4").fadeOut(100);
                    $("#conectorParte4").fadeOut(100);
                }
        );

        //  PARTE 5
        $("#descripParte_5").hide();
        $("#conectorParte5").hide();
        $('#parte_5').hover(
                function ()
                {
                    $("#descripParte_5").fadeIn(500);
                    $("#conectorParte5").fadeIn(500);
                },
                function ()
                {
                    $("#descripParte_5").fadeOut(100);
                    $("#conectorParte5").fadeOut(100);
                }
        );

        //  PARTE 6
        $("#descripParte_6").hide();
        $("#conectorParte6").hide();
        $('#parte_6').hover(
                function ()
                {
                    $("#descripParte_6").fadeIn(500);
                    $("#conectorParte6").fadeIn(500);
                },
                function ()
                {
                    $("#descripParte_6").fadeOut(100);
                    $("#conectorParte6").fadeOut(100);
                }
        );

    });


    function vidplay()
    {


        var video = document.getElementById("videoET");
        var button = document.getElementById("play");
        if (video.paused)
        {
            video.play();
            $(".play").hide();
            $(".pause").show();
//          button.textContent = "||";
        } else {
            video.pause();
            $(".pause").hide();
            $(".play").show();
//          button.textContent = ">";
        }
    }

    function restart_1() {
        var video = document.getElementById("videoET");
        video.currentTime = 0;
    }

    function skip(value) {
        var video = document.getElementById("videoET");
        video.currentTime += value;
    }


</script> 

<div class="section" id="section-eontech-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="embedImgVideoET" class="embed-responsive embed-responsive-16by9">




                    <div id="contenedorVideoET">

                        <iframe width="400" height="315" src="https://www.youtube.com/embed/BIBSpBCAnAg" frameborder="0" allowfullscreen></iframe>



                        <?php
                        /* if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS() || $detect->isiOS()) 
                          { */
                        ?>
                        <!-- <video id="videoET" src="src/video/eontech.mov" controls></video> -->
                        <!--<video id="videoET" src="src/video/HYUNDAI_mobile.mp4" controls preload></video>--> 

                        <?php
                        /*  }else
                          { */
                        ?>
<!--                      <img src="src/img/eon-tech/play-eon.png" alt="EON TECH nuevo Hyundai"  class="center-block img-responsive" id="imgVideoET"/>
<video id="videoET" src="src/video/HYUNDAI_web.mp4" controls preload></video> -->

                        <!--             <div id="buttonbar">
                        
                                         <img class="pause" id="play" onclick="vidplay()" src="src/img/eon-tech/pause.png" alt="EON TECH nuevo Hyundai"/>
                                         <img class="play" id="play" onclick="vidplay()" src="src/img/eon-tech/play.png" alt="EON TECH nuevo Hyundai"/>
                                         <img id="restart" onclick="restart_1();" src="src/img/eon-tech/reload.png" alt="EON TECH nuevo Hyundai"/>
                        
                                    </div> -->
                                      <!--<img src="src/img/eon-tech/transparencia.png" alt="EON TECH nuevo Hyundai"  class="center-block img-responsive" id="imgSombraVideoET"/>-->
                        <?php
//}
                        ?>





                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<div class="col-md-12 text-center" id="divBtnCampana">
    <a class="btn btn-default btn-lg" id="btnEonTech">CARACTERÍSTICAS</a>
    <hr id="hr">
</div>



<div class="section">
    <div class="container">
        <div class="row" id="divRowImg">
            <div class="col-md-12">
                <div id="mostrarCaracteristicasEscritorio">



                    <!--PARTE 1-->
                    <div id="descripParte_1">
                           <!-- <p>VIDRIOS ELÉCTRICOS DELANTEROS</p>-->
                        <p>BAÚL DE GRAN CAPACIDAD</p>
                    </div>
                    <hr id="conectorParte1">
                    <div  class="partesCar" id="parte_1" style=" 
                          float: left;
                          background-color: rgba(255, 255, 255, 0.34);
                          position: absolute;
                          border-radius: 50%;
                          margin-left: 27%;
                          margin-top: 8%;
                          ">


                    </div>

                    <!--PARTE 2-->
                    <div id="descripParte_2">
                        <p>RADIO BLUETOOTH</p>
                    </div>
                    <hr id="conectorParte2">
                    <div class="partesCar" id="parte_2" style=" 
                         float: left;
                         background-color: rgba(255, 255, 255, 0.34);
                         position: absolute;
                         border-radius: 50%;
                         margin-left: 45.2%;
                         margin-top: 9.5%;

                         ">

                    </div>

                    <!--PARTE 3-->
                    <div id="descripParte_3">
                        <!--<p>AIRBAG CONDUCTOR</p>-->
                        <p>AIRE ACONDICIONADO</p>
                    </div>
                    <hr id="conectorParte3">
                    <div  class="partesCar" id="parte_3" style=" 
                          float: left;
                          background-color: rgba(255, 255, 255, 0.34);
                          position: absolute;
                          border-radius: 50%;
                          margin-left: 53%;
                          margin-top: 8.5%;
                          ">

                    </div>

                    <!--PARTE 4-->
                    <div id="descripParte_4">
                        <p>AIRE ACONDICIONADO</p>
                    </div>
                    <hr id="conectorParte4">
                    <div  class="partesCar" id="parte_4" style=" 
                          float: left;
                          background-color: rgba(255, 255, 255, 0.34);
                          position: absolute;
                          border-radius: 50%;
                          margin-left: 59%;
                          margin-top: 11%;
                          ">

                    </div>

                    <!--PARTE 5-->
                    <div id="descripParte_5">
                        <p>ALARMA Y BLOQUEO CENTRAL</p>
                    </div>
                    <hr id="conectorParte5">
                    <div  class="partesCar" id="parte_5" style=" 
                          float: left;
                          background-color: rgba(255, 255, 255, 0.34);
                          position: absolute;
                          border-radius: 50%;
                          margin-left: 34%;
                          margin-top: 13%;
                          ">

                    </div>

                    <!--PARTE 6-->
                    <div id="descripParte_6">
                        <p>EXPLORADORAS</p>
                    </div>
                    <hr id="conectorParte6">
                    <div  class="partesCar" id="parte_6" style=" 
                          float: left;
                          background-color: rgba(255, 255, 255, 0.34);
                          position: absolute;
                          border-radius: 50%;
                          margin-left: 50.5%;
                          margin-top: 21%;
                          ">

                    </div>


                    <img src="src/img/eon-tech/CARRO-SKILLS.png" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>

                    <div id="btnsImgHome2">

                        <a href="https://www.hyundai.com.co/vehiculo/eon" target="_blank" class="btn  " id="btnConoce2">CONÓCELO AQUÍ</a>
                        <br>
                        <a class="btn " id="btnComparte2" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>

                    </div>


                </div>
                <div id="mostrarCaracteristicasMobile">
                    <img src="src/img/eon-tech/eon-tech-tablet.png" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row" id="divRowImg">
            <div class="col-md-12">
                <hr id="hrCaracteristicas">
                <img id="skills-produxto" src="src/img/home/skills-produxto-clara.png" alt="EON TECH nuevo Hyundai" class="center-block img-responsive">
                <img id="skills-produxto-3x3" src="src/img/home/skill-produxto-3x3-otras-seciones.png" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>
                <hr id="hrCaracteristicas">
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div  id="divTablaEon">


                    <div class="tg-wrap">
                        <a class="btn " id="btnConoceMasAqui3"><strong>FICHA TÉCNICA</strong></a>
                        <table id="tg-ELLii" class="tg">
                            <tr>
                                <th class="tg-031e">Tipo</th>
                                <th class="tg-s6z2">Epsilone 0,8 MPI (Gasolina)</th>
                            </tr>
                            <tr>
                                <td class="tg-031e">Cilindrada (C.C)</td>
                                <td class="tg-s6z2">814</td>
                            </tr>
                            <tr>
                                <td class="tg-031e">Cilindros</td>
                                <td class="tg-s6z2">3</td>
                            </tr>
                            <tr>
                                <td class="tg-031e">Transmisión</td>
                                <td class="tg-s6z2">5 Velocidades</td>
                            </tr>
                            <tr>
                                <td class="tg-031e">Frenos</td>
                                <td class="tg-s6z2">Frenos de disco delanteros, traseros de tambor</td>
                            </tr>
                        </table>
                        <a class="btn" href="https://www.hyundai.com.co/vehiculo/eon" target="_blank" id="btnConoceMasAqui2">CONOCE MÁS AQUÍ</a>
                    </div>
                    <script type="text/javascript" charset="utf-8">var TgTableSort = window.TgTableSort || function (n, t) {
                            "use strict";
                            function r(n, t) {
                                for (var e = [], o = n.childNodes, i = 0; i < o.length; ++i) {
                                    var u = o[i];
                                    if ("." == t.substring(0, 1)) {
                                        var a = t.substring(1);
                                        f(u, a) && e.push(u)
                                    } else
                                        u.nodeName.toLowerCase() == t && e.push(u);
                                    var c = r(u, t);
                                    e = e.concat(c)
                                }
                                return e
                            }
                            function e(n, t) {
                                var e = [], o = r(n, "tr");
                                return o.forEach(function (n) {
                                    var o = r(n, "td");
                                    t >= 0 && t < o.length && e.push(o[t])
                                }), e
                            }
                            function o(n) {
                                return n.textContent || n.innerText || ""
                            }
                            function i(n) {
                                return n.innerHTML || ""
                            }
                            function u(n, t) {
                                var r = e(n, t);
                                return r.map(o)
                            }
                            function a(n, t) {
                                var r = e(n, t);
                                return r.map(i)
                            }
                            function c(n) {
                                var t = n.className || "";
                                return t.match(/\S+/g) || []
                            }
                            function f(n, t) {
                                return-1 != c(n).indexOf(t)
                            }
                            function s(n, t) {
                                f(n, t) || (n.className += " " + t)
                            }
                            function d(n, t) {
                                if (f(n, t)) {
                                    var r = c(n), e = r.indexOf(t);
                                    r.splice(e, 1), n.className = r.join(" ")
                                }
                            }
                            function v(n) {
                                d(n, L), d(n, E)
                            }
                            function l(n, t, e) {
                                r(n, "." + E).map(v), r(n, "." + L).map(v), e == T ? s(t, E) : s(t, L)
                            }
                            function g(n) {
                                return function (t, r) {
                                    var e = n * t.str.localeCompare(r.str);
                                    return 0 == e && (e = t.index - r.index), e
                                }
                            }
                            function h(n) {
                                return function (t, r) {
                                    var e = +t.str, o = +r.str;
                                    return e == o ? t.index - r.index : n * (e - o)
                                }
                            }
                            function m(n, t, r) {
                                var e = u(n, t), o = e.map(function (n, t) {
                                    return{str: n, index: t}
                                }), i = e && -1 == e.map(isNaN).indexOf(!0), a = i ? h(r) : g(r);
                                return o.sort(a), o.map(function (n) {
                                    return n.index
                                })
                            }
                            function p(n, t, r, o) {
                                for (var i = f(o, E) ? N : T, u = m(n, r, i), c = 0; t > c; ++c) {
                                    var s = e(n, c), d = a(n, c);
                                    s.forEach(function (n, t) {
                                        n.innerHTML = d[u[t]]
                                    })
                                }
                                l(n, o, i)
                            }
                            function x(n, t) {
                                var r = t.length;
                                t.forEach(function (t, e) {
                                    t.addEventListener("click", function () {
                                        p(n, r, e, t)
                                    }), s(t, "tg-sort-header")
                                })
                            }
                            var T = 1, N = -1, E = "tg-sort-asc", L = "tg-sort-desc";
                            return function (t) {
                                var e = n.getElementById(t), o = r(e, "tr"), i = o.length > 0 ? r(o[0], "td") : [];
                                0 == i.length && (i = r(o[0], "th"));
                                for (var u = 1; u < o.length; ++u) {
                                    var a = r(o[u], "td");
                                    if (a.length != i.length)
                                        return
                                }
                                x(e, i)
                            }
                        }(document);
                        document.addEventListener("DOMContentLoaded", function (n) {
                            TgTableSort("tg-ELLii")
                        });</script>



                </div>
            </div>
            <div class="col-md-6 text-left" id="divTImgEon">
  <!--              <img id="imgVideo" src="src/img/imgVideo.PNG" alt=""/>-->
                <img src="src/img/eon-tech/carro-2.png" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>

            </div>
        </div>
    </div>
</div>


<?php
include 'controls/modalCompartir/eontech.php';
?>