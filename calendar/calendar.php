<!DOCTYPE html>
<html lang="en">
<head>
    <title>Evo Calendar</title>

    <meta charset="utf-8">
    <meta name="description" content="Simple Modern-looking Event Calendar Plugin">
    <meta name="keywords" content="jQuery, Plugin, Event, Calendar, EvoCalendar">
    <meta name="author" content="Edlyn Villegas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="favicon.png">

    <!-- CSS -->
    
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./evo-calendar/css/evo-calendar.min.css">
    <link rel="stylesheet" type="text/css" href="./evo-calendar/css/evo-calendar.css">

    <link rel="stylesheet" type="text/css" href="./demo/demo.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container clearfix">
            <h1 class="title" data-go="#top" title="Oh, hi! :)"><span>Purr-fect</span>Pets</h1>
            <ul>
                <li data-go="#themes">
                    <a>Themes</a>
                </li>
                <li data-go="#demos">
                    <a>Demo</a>
                </li>
                <li data-go="#usage">
                    <a>Usage</a>
                </li>
                <li data-go="#settings">
                    <a>Settings</a>
                </li>
                <li>
                    <a href="https://github.com/edlynvillegas/evo-calendar" target="_blank" title="get it on github">Github</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="main-container">
            <!-- <section>
                <div class="section-content">
                    <div class="console-log --ads">
                        <script async type="text/javascript" src="https://cdn.carbonads.com/carbon.js?serve=CEBI4KQI&placement=edlynvillegasgithubio" id="_carbonads_js"></script>
                    </div>
                </div>
            </section> -->
            <!-- <section id="features">
                <div class="section-content">
                    <p class="section-title --lng">features</p>
                    <div class="console-log --sm">
                        <div class="log-content">
<pre><code>
<span class="red">var</span> <span class="orange">features</span> = [
    <span class="yellow">'Flexible and fully customizable'</span>,
    <span class="yellow">'Responsive — has desktop, tablet and mobile design'</span>,
    <span class="yellow">'Add, remove and view calendar events'</span>,
    <span class="yellow">'Events and methods that lets you think outside the box :)'</span>,
    <span class="yellow">'Does "modern-looking" counts? Then I'm in!'</span>
]; <span class="green">// and more features to come...</span>

</code></pre>
                        </div>
                    </div>
                </div>
            </section> -->
<!-- 
            <section id="themes">
                <div class="section-content">
                    <p class="section-title --shrt">themes</p>
                    <p class="section-desc">Simple themes for a very simple plugin. You can choose what suits to your project or find inspiration to customize it just the way you like!</p>
                    <div class="theme-container clearfix">
                        <div class="theme-content">
                            <div class="console-log">
                                <div class="log-content">
                                    <img src="./img/default.png" alt="Evo Calendar - Theme: Default">
<pre><code>
$(<span class="red">'#calendar'</span>).<span class="yellow">evoCalendar</span>({
    <span class="green">// It's the default theme :)</span>
})

</code></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="theme-content">
                                <div class="console-log">
                                    <div class="log-content">
                                        <img src="./img/midnight_blue.png" alt="Evo Calendar - Theme: Midnight Blue">
<pre><code>
$(<span class="red">'#calendar'</span>).<span class="yellow">evoCalendar</span>({
    theme: <span class="violet">'Midnight Blue'</span>
})

</code></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="theme-content">
                                <div class="console-log">
                                    <div class="log-content">
                                        <img src="./img/royal_navy.png" alt="Evo Calendar - Theme: Royal Navy">
<pre><code>
$(<span class="red">'#calendar'</span>).<span class="yellow">evoCalendar</span>({
    theme: <span class="violet">'Royal Navy'</span>
})

</code></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="theme-content">
                                <div class="console-log">
                                    <div class="log-content">
                                        <img src="./img/orange_coral.png" alt="Evo Calendar - Theme: Orange Coral">
<pre><code>
$(<span class="red">'#calendar'</span>).<span class="yellow">evoCalendar</span>({
    theme: <span class="violet">'Orange Coral'</span>
})

</code></pre>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <p class="section-note">Let me customize a theme for you. <a href="https://www.buymeacoffee.com/edlynvillegas/e/5551" target="_blank" title="Click here">Click here!</a></p>
                </div>
            </section> -->
            <section id="demos">
                <div class="section-content">
                    <p class="section-title --shrt">Book your appointment!</p>
                    <!-- <div class="action-buttons">
                        <button class="btn-action active" data-set-theme="Default">DEFAULT</button>
                        <button class="btn-action" data-set-theme="Midnight Blue">MIDNIGHT BLUE</button>
                        <button class="btn-action" data-set-theme="Royal Navy">ROYAL NAVY</button>
                        <button class="btn-action" data-set-theme="Orange Coral">ORANGE CORAL</button>
                    </div> -->
                    <div class="console-log">
                        <div class="log-content">
                            <div class="--noshadow" id="demoEvoCalendar"></div>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-action" id="addBtn">ADD EVENT</button>
                        <button class="btn-action" id="removeBtn" disabled>REMOVE EVENT</button>
                    </div>
                </div>
            </section>
<!-- 
            <section id="usage">
                <div class="section-content">
                    <p class="section-title --lng">let the coding begins!</p>
                    <div class="section-caption"><p>html</p></div>
                    <div class="console-log --sm">
                        <div class="log-content">
<pre><code>
<span class="green">// Set up your HTML markup</span>
<span class="red">&lt;div <span class="blue">id</span><span class="white">=</span><span class="yellow">"calendar"</span>&gt;&lt;/div&gt;</span>

</code></pre>
                        </div>
                    </div>
                    <div class="section-caption"><p>css</p></div>
                    <div class="console-log --sm">
                        <div class="log-content">
<pre><code>
<span class="green">// Add evo-calendar.css (default theme included) in the &lt;head&gt; tag</span>
<span class="red">&lt;link <span class="blue">rel</span><span class="white">=</span><span class="yellow">"stylesheet"</span> <span class="blue">type</span><span class="white">=</span><span class="yellow">"text/css"</span> <span class="blue">href</span><span class="white">=</span><span class="yellow">"css/evo-calendar.css"</span>/&gt;</span>
<span class="green">// Themes? Add them right after the main css</span>
<span class="red">&lt;link <span class="blue">rel</span><span class="white">=</span><span class="yellow">"stylesheet"</span> <span class="blue">type</span><span class="white">=</span><span class="yellow">"text/css"</span> <span class="blue">href</span><span class="white">=</span><span class="yellow">"css/evo-calendar.midnight-blue.css"</span>/&gt;</span>

</code></pre>
                        </div>
                    </div>
                    <div class="section-caption"><p>javascript</p></div>
                    <div class="console-log --sm">
                        <div class="log-content">
<pre><code>
<span class="green">// Add evo-calendar.js before your closing &lt;body&gt; tag, right after jQuery (required)</span>
<span class="red">&lt;script <span class="blue">src</span><span class="white">=</span><span class="yellow">"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"</span>&gt;&lt;/script&gt;</span>
<span class="red">&lt;script <span class="blue">src</span><span class="white">=</span><span class="yellow">"js/evo-calendar.js"</span>&gt;&lt;/script&gt;</span>

</code></pre>
                        </div>
                    </div>
                    <div class="console-log --sm">
                        <div class="log-content">
<pre><code>
<span class="green">// Initialize evo-calendar in your script file or an inline &lt;script&gt; tag</span>
$(<span class="blue">document</span>).<span class="yellow">ready</span>(<span class="blue">function</span>() {
    $(<span class="red">'#calendar'</span>).<span class="yellow">evoCalendar</span>({
        <span class="violet">settingName</span>: settingValue
    })
})

</code></pre>
                        </div>
                    </div>
                    <div class="section-caption"><p>basic html complete look:</p></div>
                    <div class="console-log --md">
                        <div class="log-content">
<pre><code>
<span class="red">&lt;html&gt;</span>
    <span class="red">&lt;head&gt;</span>
        <span class="red">&lt;title&gt;<span class="white">My Evo Calendar</span>&lt;/title&gt;</span>
        <span class="green">// evo-calendar.css, followed by [theme-name].css (optional)</span>
        <span class="red">&lt;link <span class="blue">rel</span><span class="white">=</span><span class="yellow">"stylesheet"</span> <span class="blue">type</span><span class="white">=</span><span class="yellow">"text/css"</span> <span class="blue">href</span><span class="white">=</span><span class="yellow">"css/evo-calendar.css"</span>/&gt;</span>
        <span class="red">&lt;link <span class="blue">rel</span><span class="white">=</span><span class="yellow">"stylesheet"</span> <span class="blue">type</span><span class="white">=</span><span class="yellow">"text/css"</span> <span class="blue">href</span><span class="white">=</span><span class="yellow">"css/evo-calendar.midnight-blue.css"</span>/&gt;</span>
    <span class="red">&lt;/head&gt;</span>
    <span class="red">&lt;body&gt;</span>

        <span class="green">// this is where your calendar goes.. :)</span>
        <span class="red">&lt;div <span class="blue">id</span><span class="white">=</span><span class="yellow">"calendar"</span>&gt;&lt;/div&gt;</span>

        <span class="green">// evo-calendar.js, right after jQuery (required)</span>
        <span class="red">&lt;script <span class="blue">src</span><span class="white">=</span><span class="yellow">"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"</span>&gt;&lt;/script&gt;</span>
        <span class="red">&lt;script <span class="blue">src</span><span class="white">=</span><span class="yellow">"js/evo-calendar.js"</span>&gt;&lt;/script&gt;</span>

        <span class="red">&lt;script&gt;</span>
        <span class="green">// initialize your calendar, once the page's DOM is ready</span>
        $(<span class="blue">document</span>).<span class="yellow">ready</span>(<span class="blue">function</span>() {
            $(<span class="red">'#calendar'</span>).<span class="yellow">evoCalendar</span>({
                <span class="violet">settingName</span>: settingValue
            })
        })
        <span class="red">&lt;/script&gt;</span>

    <span class="red">&lt;/body&gt;</span>
<span class="red">&lt;/html&gt;</span>

</code></pre>
                        </div>
                    </div>
                </div>
            </section>
            settings -->
            <!-- <section id="settings">
                <div class="section-content">
                    <p class="section-title --lng">settings</p>
                    <div class="console-log">
                        <div class="log-content">
                            <table>
                                <tr>
                                    <th>settings</th>
                                    <th>type</th>
                                    <th>default</th>
                                    <th>description</th>
                                    <th>options</th>
                                </tr>
                                <tr data-settings="theme">
                                    <td>theme</td>
                                    <td>string</td>
                                    <td class="gray">Default</td>
                                    <td>Define calendar's theme</td>
                                    <td>Default, Midnight Blue, Orange Coral, Royal Navy</td>
                                </tr>
                                <tr data-settings="language">
                                    <td>language</td>
                                    <td>string</td>
                                    <td class="red">'en'</td>
                                    <td>Calendar's language</td>
                                    <td>en, es, de, pt</td>
                                </tr>
                                <tr data-settings="format">
                                    <td>format</td>
                                    <td>string</td>
                                    <td class="red">'mm/dd/yyyy'</td>
                                    <td>Date format</td>
                                    <td>Date string format</td>
                                </tr>
                                <tr data-settings="titleFormat">
                                    <td>titleFormat</td>
                                    <td>string</td>
                                    <td class="red">'MM yyyy'</td>
                                    <td>Date format for calendar title</td>
                                    <td>Date string format</td>
                                </tr>
                                <tr data-settings="eventHeaderFormat">
                                    <td>eventHeaderFormat</td>
                                    <td>string</td>
                                    <td class="red">'MM d, yyyy'</td>
                                    <td>Date format for calendar event's title</td>
                                    <td>Date string format</td>
                                </tr>
                                <tr data-settings="firstDayOfWeek">
                                    <td>firstDayOfWeek</td>
                                    <td>number</td>
                                    <td class="violet">0</td>
                                    <td>Displayed first day of the week</td>
                                    <td>0 (Sunday) - 6 (Saturday)</td>
                                </tr>
                                <tr data-settings="todayHighlight">
                                    <td>todayHighlight</td>
                                    <td>boolean</td>
                                    <td class="blue">false</td>
                                    <td>Highlight today's date in calendar</td>
                                    <td>true, false</td>
                                </tr>
                                <tr data-settings="sidebarDisplayDefault">
                                    <td>sidebarDisplayDefault</td>
                                    <td>boolean</td>
                                    <td class="blue">true</td>
                                    <td>Set default visibility of sidebar</td>
                                    <td>true, false</td>
                                </tr>
                                <tr data-settings="sidebarToggler">
                                    <td>sidebarToggler</td>
                                    <td>boolean</td>
                                    <td class="blue">true</td>
                                    <td>Display the button for toggling the sidebar</td>
                                    <td>true, false</td>
                                </tr>
                                <tr data-settings="eventDisplayDefault">
                                    <td>eventDisplayDefault</td>
                                    <td>boolean</td>
                                    <td class="blue">true</td>
                                    <td>Set default visibility of event lists</td>
                                    <td>true, false</td>
                                </tr>
                                <tr data-settings="eventListToggler">
                                    <td>eventListToggler</td>
                                    <td>boolean</td>
                                    <td class="blue">true</td>
                                    <td>Display the button for toggling the event lists</td>
                                    <td>true, false</td>
                                </tr>
                                <tr data-settings="calendarEvents">
                                    <td>calendarEvents</td>
                                    <td>array</td>
                                    <td class="gray">null</td>
                                    <td>Defined events for calendar to show</td>
                                    <td>Array of events</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="section-caption"><p>settings example</p></div>
                    <div class="console-log --sm">
                        <div class="log-content">
<pre><code id="event-settings">
<span class="green">// calendarEvents</span>
$(<span class="red">'#calendar'</span>).<span class="yellow">evoCalendar</span>({
    todayHighlight: <span class="blue">true</span>,
    calendarEvents: [
        {
            <span class="red">id</span>: <span class="red">"4hducye"</span>, <span class="green">// Event's id (required, for removing event)</span>
            <span class="red">name</span>: <span class="red">"Today's Event"</span>, <span class="green">// Name of event</span>
            <span class="red">description</span>: <span class="red">"Lorem ipsum dolor sit amet.."</span>, <span class="green">// Description of event (optional)</span>
            <span class="red">date</span>: <span class="blue">new</span> <span class="yellow">Date</span>(), <span class="green">// Date of event</span>
            <span class="red">type</span>: <span class="red">"holiday"</span>, <span class="green">// Type of event (event|holiday|birthday)</span>
            <span class="red">color</span>: <span class="blue">"#63d867"</span> <span class="green">// Event custom color (optional)</span>
            <span class="red">everyYear</span>: <span class="blue">true</span> <span class="green">// Event is every year (optional)</span>
        }
    ]
})

</code></pre>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <p class="section-title --shrt">methods</p>
                    <div class="console-log">
                        <div class="log-content">
                            <table>
                                <tr>
                                    <th>method</th>
                                    <th>argument</th>
                                    <th>description</th>
                                </tr>
                                <tr data-method="setTheme">
                                    <td>setTheme</td>
                                    <td class="red">string</td>
                                    <td>Set/Change theme</td>
                                </tr>
                                <tr data-method="toggleSidebar">
                                    <td>toggleSidebar</td>
                                    <td class="blue">boolean (optional)</td>
                                    <td>Toggle sidebar display</td>
                                </tr>
                                <tr data-method="toggleEventList">
                                    <td>toggleEventList</td>
                                    <td class="blue">boolean (optional)</td>
                                    <td>Toggle event list display</td>
                                </tr>
                                <tr data-method="getActiveDate">
                                    <td>getActiveDate</td>
                                    <td class="gray">none</td>
                                    <td>Get the selected date</td>
                                </tr>
                                <tr data-method="getActiveEvents">
                                    <td>getActiveEvents</td>
                                    <td class="gray">none</td>
                                    <td>Get the event(s) of selected date</td>
                                </tr>
                                <tr data-method="selectYear">
                                    <td>selectYear</td>
                                    <td class="violet">number</td>
                                    <td>Select year programmatically</td>
                                </tr>
                                <tr data-method="selectMonth">
                                    <td>selectMonth</td>
                                    <td class="violet">number (0-11)</td>
                                    <td>Select month programmatically</td>
                                </tr>
                                <tr data-method="selectDate">
                                    <td>selectDate</td>
                                    <td class="red">string</td>
                                    <td>Select date programmatically</td>
                                </tr>
                                <tr data-method="addCalendarEvent">
                                    <td>addCalendarEvent</td>
                                    <td class="red">array/object</td>
                                    <td>Add Calendar event(s)</td>
                                </tr>
                                <tr data-method="removeCalendarEvent">
                                    <td>removeCalendarEvent</td>
                                    <td class="red">array/string</td>
                                    <td>Remove event(s) by their id</td>
                                </tr>
                                <tr data-method="destroy">
                                    <td>destroy</td>
                                    <td class="gray">none</td>
                                    <td>Well.. destroy the calendar</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="section-caption"><p>methods example</p></div>
                    <div class="console-log --sm">
                        <div class="log-content">
<pre><code id="method-code">
<span class="green">// loading...</span>

</code></pre>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <p class="section-title --shrt">events</p>
                    <div class="console-log">
                        <div class="log-content">
                            <table>
                                <tr>
                                    <th>events</th>
                                    <th>argument</th>
                                    <th>description</th>
                                </tr>
                                <tr data-event="selectDate">
                                    <td>selectDate</td>
                                    <td class="red">newDate, oldDate</td>
                                    <td>Fires after selecting date</td>
                                </tr>
                                <tr data-event="selectEvent">
                                    <td>selectEvent</td>
                                    <td class="red">activeEvent</td>
                                    <td>Fires after selecting event</td>
                                </tr>
                                <tr data-event="selectMonth">
                                    <td>selectMonth</td>
                                    <td class="red">activeMonth, monthIndex</td>
                                    <td>Fires after selecting month</td>
                                </tr>
                                <tr data-event="selectYear">
                                    <td>selectYear</td>
                                    <td class="red">activeYear</td>
                                    <td>Fires after changing year</td>
                                </tr>
                                <tr data-event="destroy">
                                    <td>destroy</td>
                                    <td class="orange">calendar</td>
                                    <td>Fires after destroying calendar</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="section-caption"><p>events example</p></div>
                    <div class="console-log --sm">
                        <div class="log-content">
<pre><code id="event-code">
<span class="green">// loading...</span>

</code></pre>
                        </div>
                    </div>
                </div>
            </section> --> 
        </div>
    </main>
    <footer id="footer">
        <div class="container">
          <h3>Purr-fect pets</h3>
          <p>People trust us, pets love us.</p>
          <div class="social-links">
            <a href="https://twitter.com/_reinaaaa_" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/_reiinaaa_/" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
          <div class="copyright">
            &copy; Copyright <strong><span>Purr-fect pets</span></strong>. All Rights Reserved
          </div>
          
        </div>
      </footer>

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="./evo-calendar/js/evo-calendar.min.js"></script>
    <script src="./demo/demo.js"></script>
</body>
</html>