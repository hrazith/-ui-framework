<div class="module">

        <h3>Top Nav</h3>
        <p> This is a persistent element that appears on top of the page. It serves as navigation. 
        </p>
         

<div class="topnav" >
            <ul>
                <li><a <?php if ($thisPage=="Home") echo "class=\"active\""; ?> href="index.php"><span class="icon-home"></span>BMSS</a></li>
                <li><a <?php if ($thisPage=="Reports") echo "class=\"active\""; ?> href="reports.php">Reports</a></li>
                <li><a <?php if ($thisPage=="Follow-up") echo "class=\"active\""; ?> href="follow-up.php">For Follow-up&nbsp;<span class="label red">(23 NEW)</span></a></a></li>
                <li><a <?php if ($thisPage=="Comments") echo "class=\"active\""; ?> href="comments.php">Comments</a></li>
                <li><a href="#">Tools</a><?php include_once("_includes/tools-menu.php"); ?></li>
            </ul>
            <hr>
</div>


<!-- *************************
        Coding Tabs 
***************************-->
<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#topnavtab1">HTML</a></li>
        <li><a href="#topnavtab2">CSS</a></li>
    </ul>

    <div class="tab-content">
        <div id="topnavtab1" class="tab active">
            <p>
                <pre class="language-markup">
                    <code>
&lt;div class="topnav" >
            &lt;ul>
                &lt;li>&lt;a &lt;?php if ($thisPage=="Home") echo "class=\"active\""; ?> href="index.php">&lt;span class="icon-home">&lt;/span>BMSS&lt;/a>&lt;/li>
                &lt;li>&lt;a &lt;?php if ($thisPage=="Reports") echo "class=\"active\""; ?> href="reports.php">Reports&lt;/a>&lt;/li>
                &lt;li>&lt;a &lt;?php if ($thisPage=="Follow-up") echo "class=\"active\""; ?> href="follow-up.php">For Follow-up&nbsp;&lt;span class="label red">(23 NEW)&lt;/span>&lt;/a>&lt;/a>&lt;/li>
                &lt;li>&lt;a &lt;?php if ($thisPage=="Comments") echo "class=\"active\""; ?> href="comments.php">Comments&lt;/a>&lt;/li>
                &lt;li>&lt;a href="#">Tools&lt;/a>&lt;?php include_once("_includes/tools-menu.php"); ?>&lt;/li>
            &lt;/ul>
            &lt;hr>
&lt;/div>
                    </code>
                </pre>
            </p>
        </div><!-- /tab1-->
     
        <div id="topnavtab2" class="tab">
            <p>
                <pre class="language-css">
                    <code>
.topnav>ul { margin-top: 23px;}
.topnav ul ul { display: none; }
.topnav>ul>li { position: relative; padding-right: 48px; }
.topnav ul li a { 
    font-size: 14px;
    font-weight: bold;
    color: #949494;
    padding-bottom: 2px; 
    text-decoration: none;
    position: relative;
}

.topnav>ul>li>a:hover, .topnav>ul>li:hover>a, .topnav>ul>li a.active { 
  color: #21354f;
  border-bottom: 3px solid #21354f; 
} 

.topnav ul li:hover > ul { display: block; }

.topnav>ul>li { 
    list-style: none; 
    display: inline;
}

.topnav ul ul, .buckets ul { 
    white-space: nowrap;
    z-index:20;
    position: absolute;
    left:0px;
    background-color: #fff;
    border: 1px solid #C9C9C9;
    margin-top: 4px !important;
    -moz-border-radius: 0 4px 4px 4px;
    -webkit-border-radius: 0 4px 4px 4px;
    border-radius: 0 4px 4px 4px;
    -moz-box-shadow: 0px 0px 2px rgba(68,68,68,0.3);
    -webkit-box-shadow: 0px 0px 2px rgba(68,68,68,0.3);
    box-shadow: 0px 0px 2px rgba(68,68,68,0.3);
}

.topnav ul ul li, .buckets ul li {
    display:block;
    padding: 8px 30px 8px 8px;
    border-bottom: 1px solid #c9c9c9;
}

.topnav ul ul li a { 
  font-size:11px; 
  color:#2e2e2e;
  fnt-weight: normal;
}

.topnav ul ul li:hover, .buckets ul li:hover {
    background-color:#556996;
    font-weight:bold;
    color:#fff;
    cursor:pointer;
}

.topnav ul ul li:hover a {
    color:#fff;
}
                    </code>
                </pre>
            </p>
        </div><!-- /tab2-->

    </div><!-- /tab-content-->

</div><!-- /tabs-->
 
 




</div> <!--/module-->