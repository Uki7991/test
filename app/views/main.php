<div class="container">
    <div class="row where-back mb-5 justify-content-center text-center text-light" style="">
        <div class="back main w-100"></div>

        <div class="col-12 my-5">
            <h2 class="font-weight-bold">About this project</h2>
        </div>
        <div class="col-12 col-lg-6 mb-5">
            <p>Hello!</p>
            <p>My name is Tilek. And I`m glad to work with this project.</p>
            <p>There are my emotions. My efforts.</p>
            <p>Welcome!</p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12 text-center mb-4">
            <h3>Router Class</h3>
        </div>
        <div class="col-lg-6 col-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/public/img/Router-1.PNG" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/public/img/Router-2.PNG" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/public/img/Router-3.PNG" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-lg-0 col-12">
            <p>The Router class was the longest and hardest work in this project.</p>
            <p>So, let`s go to describe it.</p>
            <p>First of all, I want to say about checking routes,
                pathes of Controllers and their methods in it.
                If they don`t exists, we locate our people to 404 page.</p>
            <p>The hardest thing in this class is that I couldn`t understand how
                to get id from url like <kbd>http://test/user/show/<span class="font-weight-bold">21</span></kbd> .</p>
            <p>Then I found method <code>preg_replace($pattern, $replacement, $subject)</code> where in <code>$replacement</code>
                I use '<code>$1</code>'. Maybe it is not right, but it`s working!</p>
            <p>So, Let`s go to <a href="#controller">Controllers</a>!</p>
        </div>
        <div id="controller" class="col-12 text-center my-4">
            <h3>Controller Class</h3>
        </div>
        <div class="col-lg-6 mt-3 mt-lg-0 col-12 text-lg-right">
            <p>In Controller class I require Model and View.</p>
            <p>I don`t know for what I get  params of $route, maybe it will be used for something!</p>
            <p>Go forward to <a href="#view">View class</a></p>
        </div>
        <div class="col-lg-6 col-12">
            <img src="/public/img/Controller-1.PNG" class="w-100" alt="">
        </div>
        <div id="view" class="col-12 text-center my-4">
            <h3>View Class</h3>
        </div>
        <div class="col-lg-6 col-12">
            <img src="/public/img/View-1.PNG" class="w-100" alt="">
        </div>
        <div class="col-lg-6 mt-3 mt-lg-0 col-12">
            <p>There are realized functions <code>render($path, $title, $vars = [])</code> ->
                where it renders layout with view, <code>redirect($url)</code> -> where we redirect our people
            to location in parameter within, <code>errorCode($code)</code> -> redirect to views 404, 405, etc.</p>
            <p>Go to <a href="#database">Database class</a></p>
        </div>
        <div id="database" class="col-12 text-center my-4">
            <h3>Database Class</h3>
        </div>
        <div class="col-lg-6 mt-3 mt-lg-0 col-12 text-lg-right">
            <p>There I connect you to MySQL database with driver PDO.</p>
            <p>Realized <code>row($sql, $params = [])</code> and <code>column($sql, $params = [])</code>
                where we can get all data or one record from table.
            </p>
            <p><code>$params[]</code> helps us to work with dynamic data in query</p>
            <p>In <code>query($sql, $params = [])</code> we prepare our SQL query and bind all data in <code>$params[]</code>
                with query then we run <code>execute()</code>
            </p>
            <p>Go forward to <a href="#model">Model class</a></p>
        </div>
        <div class="col-lg-6 col-12">
            <img src="/public/img/DB-1.PNG" class="w-100" alt="">
        </div>
        <div id="model" class="col-12 text-center my-4">
            <h3>Model Class</h3>
        </div>
        <div class="col-lg-6 col-12">
            <img src="/public/img/Model-1.PNG" class="w-100" alt="">
        </div>
        <div class="col-lg-6 mt-3 mt-lg-0 col-12">
            <p>There we only use DB class to get access to DB</p>
        </div>
    </div>
</div>