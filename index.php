<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>CS:GO Binds Generator</title>
        <link rel="icon" type="image/png" href="img/weapon_elite.png" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="stylesheet" type="text/css" href="css/weapons.css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/keyboard.js"></script>
        <script type="text/javascript" src="js/weapons.js"></script>
    </head>
    <body>
        <h1>CS:GO BINDS GENERATOR</h1>
        <div id="version">
            <h1 id="version_title">WORK IN PROGRESS</h1>
            <p id="version_text">
                This project is a work in progress, use it at your own risk.<br/>
                There is a (known) bug with rifles/smgs/heavy selection. I'm still working on multiple equipment and multiple grenades.<br/>
            </p>
            <p style="text-align: center; font-size: 20px;">
                The source code was just released on <a href="https://github.com/Outpox/csgo-binds-generator">Github</a> !
            </p>
        </div>
        <div id="warning_info">
            <img src="img/icons/exclamation.png" />
            <br/>
            <span>
                The CZ75 was recently moved from the p250 slot to the TEC-9/FiveSeven slot.
            </span>
        </div>
        <div id="container">
            <textarea id="write" rows="6" cols="60"></textarea>
            <ul id="keyboard">
                <div class="arrow">
                    <li class="kp_empty"></li>
                    <li class="symbol">NumLock<span></span></li>
                    <li class="symbol">/<span>kp_slash</span></li>
                    <li class="symbol">*<span>kp_multiply</span></li>
                    <li class="symbol lastitem">&#8722;<span>kp_minus</span></li>

                    <li class="kp_empty" style="clear: left"></li>
                    <li class="symbol">7<span>kp_home</span></li>
                    <li class="symbol">8<span>kp_uparrow</span></li>
                    <li class="symbol">9<span>kp_pgup</span></li>
                    <li class="symbol lastitem">+<span>kp_plus</span></li>

                    <li class="kp_empty" style="clear: left"></li>
                    <li class="symbol">4<span>kp_leftarrow</span></li>
                    <li class="symbol">5<span>kp_5</span></li>
                    <li class="symbol">6<span>kp_rightarrow</span></li>
                    <li class="symbol lastitem">&#43;<span>kp_plus</span></li>


                    <li class="empty" style="clear: left"></li>
                    <li class="symbol">&#8593;<span>uparrow</span></li>
                    <li class="empty"></li>
                    <li class="empty"></li>
                    <li class="symbol">Insert<span>ins</span></li>
                    <li class="symbol">Home<span>home</span></li>
                    <li class="symbol">Pg up<span>pgup</span></li>
                    <li id="kp_1" class="symbol">1<span>kp_end</span></li>
                    <li class="symbol">2<span>kp_downarrow</span></li>
                    <li class="symbol">3<span>kp_pgdn</span></li>
                    <li class="symbol lastitem">Enter<span>kp_enter</span></li>

                    <li class="symbol" style="clear: left">&#8592;<span>leftarrow</span></li>
                    <li class="symbol">&#8595;<span>downarrow</span></li>
                    <li class="symbol">&#8594;<span>rightarrow</span></li>
                    <li class="empty"></li>
                    <li class="symbol">Delete<span>del</span></li>
                    <li class="symbol">End<span>end</span></li>
                    <li class="symbol">Pg down<span>pgdn</span></li>
                    <li id="kp_0" class="symbol" >0<span>kp_ins</span></li>
                    <li class="symbol">.<span>kp_del</span></li>
                    <li class="symbol lastitem">Enter<span>kp_enter</span></li>

                </div>
                <li class="horizontal_sep lastitem">&nbsp;</li>
                <div class="fkey">
                    <li class="letter" style="clear: left">F1</li>
                    <li class="letter">F2</li>
                    <li class="letter">F3</li>
                    <li class="letter">F4</li>
                    <li class="letter">F5</li>
                    <li class="letter">F6</li>
                    <li class="letter">F7</li>
                    <li class="letter">F8</li>
                    <li class="letter">F9</li>
                    <li class="letter">F10</li>
                    <li class="letter">F11</li>
                    <li class="letter lastitem">F12</li>
                </div>
                <li class="letter" style="clear: left">`</li>
                <li class="letter">1</li>
                <li class="letter">2</li>
                <li class="letter">3</li>
                <li class="letter">4</li>
                <li class="letter">5</li>
                <li class="letter">6</li>
                <li class="letter">7</li>
                <li class="letter">8</li>
                <li class="letter">9</li>
                <li class="letter">0</li>
                <li class="letter">-</li>
                <li class="letter">=</li>
                <li class="delete lastitem">BACKSPACE</li>
                <li class="tab">TAB</li>
                <li class="letter">Q</li>
                <li class="letter">W</li>
                <li class="letter">E</li>
                <li class="letter">R</li>
                <li class="letter">T</li>
                <li class="letter">Y</li>
                <li class="letter">U</li>
                <li class="letter">I</li>
                <li class="letter">O</li>
                <li class="letter">P</li>
                <li class="letter">[</li>
                <li class="letter">]</li>
                <li class="letter lastitem">&#92;</li>
                <li class="capslock">CAPSLOCK</li>
                <li class="letter">A</li>
                <li class="letter">S</li>
                <li class="letter">D</li>
                <li class="letter">F</li>
                <li class="letter">G</li>
                <li class="letter">H</li>
                <li class="letter">J</li>
                <li class="letter">K</li>
                <li class="letter">L</li>
                <li class="letter">;</li>
                <li class="letter">'</li>
                <li class="return lastitem">ENTER</li>
                <li class="left-shift">SHIFT</li>
                <li class="letter">Z</li>
                <li class="letter">X</li>
                <li class="letter">C</li>
                <li class="letter">V</li>
                <li class="letter">B</li>
                <li class="letter">N</li>
                <li class="letter">M</li>
                <li class="letter">,</li>
                <li class="letter">.</li>
                <li class="letter">/</li>
                <li class="right-shift lastitem">rSHIFT</li>
                <li class="ctrl-left">CTRL</li>
                <li class="ctrl">&nbsp;</li>
                <li class="ctrl">ALT</li>
                <li class="space">SPACE</li>
                <li class="ctrl">rALT</li>
                <li class="ctrl">&nbsp;</li>
                <li class="ctrl lastitem">rCTRL</li>

            </ul>
        </div>

        <div id="menu">
            <p id="pselect" >Selected key : <text id="selectedkey"></text></p>
            <hr></hr>
            <p>Primary weapons : <button id="primwepbut">Show/Hide</button></p>
            <div id="primary">
                <form id="primaryform">
                    <p>Rifles : <button id="riflesbut">Show/Hide</button></p>
                    <div id="rifles">
                        <ul class='img-list'>
                            <li>
                                <input id="galil" type="radio" name='primaryradio' value="buy galilar; buy famas;"/>
                                <label for="galil">
                                    <img  src="img/weapon_galilar.png"/>
                                </label>
                                </input>
                            </li>
                            <li>
                                <input id="ak47" type="radio" name='primaryradio' value="buy ak47; buy m4a1;"/>
                                <label for="ak47">
                                    <img src="img/weapon_ak47.png"/>
                                </label>

                            </li>
                            <li>
                                <input id="sg556" type="radio" name='primaryradio' value="buy sg556; buy aug;"/>
                                <label for="sg556">
                                    <img src="img/weapon_sg556.png"/>
                                </label>

                            </li>
                            <li>
                                <input id="awp" type="radio" name='primaryradio' value="buy awp;"/>
                                <label for="awp">
                                    <img src="img/weapon_awp.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="famas" type="radio" name='primaryradio' value="buy famas; buy galilar;"/>
                                <label for="famas">
                                    <img src="img/weapon_famas.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="m4a1s" type="radio" name='primaryradio' value="buy m4a1; buy ak47;"/>
                                <label for="m4a1s">
                                    <img src="img/weapon_m4a1_silencer.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="m4a4" type="radio" name='primaryradio' value="buy m4a1; buy ak47;"/>
                                <label for="m4a4">
                                    <img src="img/weapon_m4a1.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="aug" type="radio" name='primaryradio' value="buy aug; buy sg556;"/>
                                <label for="aug">
                                    <img src="img/weapon_aug.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="scout" type="radio" name='primaryradio' value="buy ssg08;"/>
                                <label for="scout">
                                    <img src="img/weapon_ssg08.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="g3sg1" type="radio" name='primaryradio' value="buy g3sg1; buy scar20;"/>
                                <label for="g3sg1">
                                    <img src="img/weapon_g3sg1.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="scar20" type="radio" name='primaryradio' value="buy scar20; buy g3sg1;"/>
                                <label for="scar20">
                                    <img src="img/weapon_scar20.png"/>
                                </label>

                            </li>
                        </ul>
                    </div>
                    <p>SMGs : <button id="smgsbut">Show/Hide</button></p>
                    <div id="smgs">
                        <ul class='img-list'>
                            <li>
                                <input id="mac10" type="radio" name='primaryradio' value="buy mac10; buy mp9;"/>
                                <label for="mac10">
                                    <img  src="img/weapon_mac10.png"/>
                                </label>
                                </input>
                            </li>
                            <li>
                                <input id="mp9" type="radio" name='primaryradio' value="buy mp9; buy mac10;"/>
                                <label for="mp9">
                                    <img src="img/weapon_mp9.png"/>
                                </label>

                            </li>
                            <li>
                                <input id="mp7" type="radio" name='primaryradio' value="buy mp7;"/>
                                <label for="mp7">
                                    <img src="img/weapon_mp7.png"/>
                                </label>

                            </li>
                            <li>
                                <input id="bizon" type="radio" name='primaryradio' value="buy bizon;"/>
                                <label for="bizon">
                                    <img src="img/weapon_bizon.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="p90" type="radio" name='primaryradio' value="buy p90;"/>
                                <label for="famas">
                                    <img src="img/weapon_p90.png"/>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <p>Heavy : <button id="heavybut">Show/Hide</button></p>
                    <div id="heavy">
                        <ul class='img-list'>
                            <li>
                                <input id="nova" type="radio" name='primaryradio' value="buy nova;"/>
                                <label for="nova">
                                    <img src="img/weapon_nova.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="xm1014" type="radio" name='primaryradio' value="buy xm1014;"/>
                                <label for="xm1014">
                                    <img src="img/weapon_xm1014.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="saw" type="radio" name='primaryradio' value="buy sawedoff; buy mag7;"/>
                                <label for="saw">
                                    <img  src="img/weapon_sawedoff.png"/>
                                </label>
                                </input>
                            </li>
                            <li>
                                <input id="mag7" type="radio" name='primaryradio' value="buy mag7; buy sawedoff;"/>
                                <label for="mag7">
                                    <img src="img/weapon_mag7.png"/>
                                </label>
                            </li>
                            <li>
                                <input id="m249" type="radio" name='primaryradio' value="buy m249;"/>
                                <label for="m249">
                                    <img src="img/weapon_m249.png" title="M249"/>
                                </label>
                            </li>
                            <li>
                                <input id="negev" type="radio" name='primaryradio' value="buy negev;"/>
                                <label for="negev">
                                    <img src="img/weapon_negev.png" title="Negev"/>
                                </label>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <hr></hr>
            <p>Secondary weapons : <button id="secondwepbut">Show/Hide</button></p>
            <form id="secondaryform">
                <div id="gun">
                    <ul class='img-list'>
                        <li>
                            <input id="p250" type="radio" name='secondary' value="buy p250;"/>
                            <label for="p250">
                                <img  src="img/weapon_p250.png"/>
                            </label>
                            </input>
                        </li>
                        <li>
                            <input id="cz" type="radio" name='secondary' value="buy tec9; buy fiveseven;"/>
                            <label for="cz">
                                <img src="img/weapon_cz75a.png"/>
                            </label>

                        </li>
                        <li>
                            <input id="tec9" type="radio" name='secondary' value="buy tec9; buy fiveseven;"/>
                            <label for="tec9">
                                <img src="img/weapon_tec9.png"/>
                            </label>
                        </li>
                        <li>
                            <input id="fiveseven" type="radio" name='secondary' value="buy fiveseven; buy tec9;"/>
                            <label for="fiveseven">
                                <img src="img/weapon_fiveseven.png"/>
                            </label>

                        </li>
                        <li>
                            <input id="dual" type="radio" name='secondary' value="buy elite;"/>
                            <label for="dual">
                                <img src="img/weapon_elite.png"/>
                            </label>
                        </li>
                        <li>
                            <input id="deagle" type="radio" name='secondary' value="buy deagle;"/>
                            <label for="deagle">
                                <img src="img/weapon_deagle.png"/>
                            </label>
                        </li>
                    </ul>
                </div>
            </form>
            <hr></hr>
            <p>Grenades : <button id="grebut">Show/Hide</button></p>
            <form id="greform">
                <div id="grenades">
                    <ul class='img-list'>
                        <li>
                            <input id="hegrenade" type="radio" name='grenade' value="buy hegrenade;"/>
                            <label for="hegrenade">
                                <img  src="img/weapon_hegrenade.png"/>
                            </label>
                            </input>
                        </li>
                        <li>
                            <input id="flash" type="radio" name='grenade' value="buy flashbang;"/>
                            <label for="flash">
                                <img src="img/weapon_flashbang.png" title="Flashbang"/>
                            </label>

                        </li>
                        <li>
                            <input id="smoke" type="radio" name='grenade' value="buy smokegrenade;"/>
                            <label for="smoke">
                                <img src="img/weapon_smokegrenade.png"/>
                            </label>
                        </li>
                        <li>
                            <input id="decoy" type="radio" name='grenade' value="buy decoy;"/>
                            <label for="decoy">
                                <img src="img/weapon_decoy.png" title="Decoy"/>
                            </label>

                        </li>
                        <li>
                            <input id="molotov" type="radio" name='grenade' value="buy molotov; buy incgrenade;"/>
                            <label for="molotov">
                                <img src="img/weapon_molotov.png"/>
                            </label>
                        </li>
                        <li>
                            <input id="incendiary" type="radio" name='grenade' value="buy incgrenade; buy molotov;"/>
                            <label for="incendiary">
                                <img src="img/weapon_incgrenade.png"/>
                            </label>
                        </li>

                    </ul>
                </div>
            </form>
            <hr></hr>
            <p>Equipment : <button id="equipbut">Show/Hide</button></p>
            <form id="equipform">
                <div id="equipment">
                    <ul class='img-list'>
                        <li>
                            <input id="kevlar" type="radio" name='other' value="buy vest;"/>
                            <label for="kevlar">
                                <img src="img/equipment_kevlar.png"/>
                            </label>
                            </input>
                        </li>
                        <li>
                            <input id="helmet" type="radio" name='other' value="buy vesthelm;"/>
                            <label for="helmet">
                                <img src="img/equipment_helmet.png"/>
                            </label>
                            </input>
                        </li>
                        <li>
                            <input id="kevlarhelm" type="radio" name='other' value="buy vesthelm;buy vest;"/>
                            <label for="kevlarhelm">
                                <img src="img/equipment_kevlarhelmet.png"/>
                            </label>
                            </input>
                        </li>
                        <li>
                            <input id="defuse" type="radio" name='other' value="buy defuser;"/>
                            <label for="defuse">
                                <img src="img/equipment_defusekit.png"/>
                            </label>

                        </li>
                        <li>
                            <input id="taser" type="radio" name='other' value="buy taser;"/>
                            <label for="taser">
                                <img src="img/weapon_taser.png"/>
                            </label>

                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </body>
    <footer>Created by <a href="http://www.reddit.com/user/Outpox/">/u/Outpox</a> &#149; 2014 (Released on <a href="https://github.com/Outpox/csgo-binds-generator">Github</a>)</footer>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-50661645-2', 'auto');
        ga('send', 'pageview');

    </script>
</html>