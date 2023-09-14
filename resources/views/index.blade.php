
<!doctype html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="DdDI4wTBk9YUbKlgYt9z9fU0lt3ebZBnwZw30y9L">
    <link rel="canonical" href="https://yemorkovin.ru/" />

    <title>YeMorkovin.ru - Личный блог</title>
    <meta name="description" content="Личный блог системного администратора, программиста">
    <meta name="keywords" content="блог, программирование, php, python, django, laravel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/png" sizes="32x32" href="img/32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/192x192.png">
    <link rel="shortcut icon" href="img/32x32.png">
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/fancybox@3.0.1/dist/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92520623, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92520623" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FG9510M8TC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-XXXXXXXXX-X');
</script>
</head>
<body id="body">

<div class="header">
    <div class="container">
        <div class="header__row">
            <a class="header__logo" href="/">
                <img alt="ProgBasics" src="https://yemorkovin.ru/images/logo.png"/>
            </a>
            <div class="header__panel">
                <button class="header__menu-category show--category" onclick="document.location.href='https://kwork.ru/user/nfmorkovin'">
                    Заказать работу
                </button>
                <ul class="header__menu">
                    <li class="header__menu-item">
                        <a class="header__menu-link" href="/ob-avtore">
                            Об авторе
                        </a>
                    </li>
					 <li class="header__menu-item">
                        <a class="header__menu-link" href="https://t.me/tprogram">
                            Telegram
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a class="header__menu-link" href="https://github.com/yemorkovin">
                            GitHub
                        </a>
                    </li>
                    
                    
                  
                </ul>
                <button aria-label="show burger menu" class="btn--light header__burger">
                </button>
            </div>
        </div>
    </div>
</div>

 <div class="container">
        <div class="content-container">
            <div class="main-block">
                <div class="section">
                                            <h1>Блог</h1>
                        <p>Блог, направленный на саморазвитие каждого человека. Мы не просто даем знания, мы обучаем
                            студентов развиваться самостоятельно. Огромное количество практики, домашние задания и их
                            разбор с преподавателем — необходимые составляющие курса, который действительно даст
                            результат.</p>
                            <p>
                                <a href="https://repetitor.yemorkovin.ru"><img src="https://yemorkovin.ru/images/repetitor-po-programmirovaniyu.gif" alt="Услуги репетитора" style="width: 70%;margin: auto;" align="center"></a>
                            </p>
                                    </div>
                <div class="news">
                    <div class="news__filter">
                        <ul class="news__filter-list">
                                                        <li class="news__filter-item is-current"><a class="news__filter-link" href="/">Все </a></li>
                                <li class="news__filter-item"><a class="news__filter-link" href="/category/laravel">Laravel</a></li>

    <li class="news__filter-item"><a class="news__filter-link" href="/category/django">django</a></li>

    <li class="news__filter-item"><a class="news__filter-link" href="/category/python">Python</a></li>

    <li class="news__filter-item"><a class="news__filter-link" href="/category/php">PHP</a></li>

    <li class="news__filter-item"><a class="news__filter-link" href="/category/wordpress">WordPress</a></li>

    <li class="news__filter-item"><a class="news__filter-link" href="/category/jquery">jquery</a></li>

    <li class="news__filter-item"><a class="news__filter-link" href="/category/bitrix">bitrix</a></li>


                                                    </ul>
                    </div>
<div class="news__row" id="data-wrapper">
    @foreach($articles as $article)
    <div class="news__col">
        <a class="news__col--body" href="/post/{{$article->id}}">
            <div class="news__col-img--wrap">
                <img class="news__col-img" src="/storage/{{$article->image}}" alt="{{$article->title}}" width="384" height="207">
            </div>
            <div class="news__col-info">
                <div class="news__col-title">{{$article->title}}</div>
                <div class="news__col-label">bitrix</div>
                <div>{{$article->description}}</div>
                <div class="short__row">

                    <div class="short">{{date('d.m.Y', strtotime($article->created_at))}}</div>
                    
                </div>
            </div>
        </a>
    </div>
    @endforeach
       
      
       
       
        
        
       
      
       
                    </div>
                </div>
                </svg>
            </div>
        </div>
    </div>

<div class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__item">
                <p>
                    2023. Все права защищены.
                </p>
               
            </div>
            <div class="footer__item">
                <ul class="footer__menu">
                   
                    <li>
                        <a href="https://yemorkovin.ru">
                            Услуги репетитора
                        </a>
                    </li>
                </ul>
                <p>
                  
                </p>
                <p>
                    Связаться по любым вопросам:
                    <a href="mailto:admin@yemorkovin.ru">
                        admin@yemorkovin.ru
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
    <script async src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@16.1.0/dist/lazyload.min.js"></script>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script rel="preload" src="/js/jquery.min.js"></script>
    <script rel="preload" src="/js/slick.min.js"></script>
    <script src="/js/main.js" defer></script>
    <script rel="preload" src="/js/filter-category.js"></script>
        <script>
        //var ENDPOINT = "http://new.loc/";
        var page = 1;

        /*------------------------------------------
        --------------------------------------------
        Call on Scroll
        --------------------------------------------
        --------------------------------------------*/
        $(window).scroll(function () {
            if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 20)) {
                page++;
                infinteLoadMore(page);

            }
        });

        /*------------------------------------------
        --------------------------------------------
        call infinteLoadMore()
        --------------------------------------------
        --------------------------------------------*/
        function infinteLoadMore(page) {
            if (page < 30) {
                $.ajax({
                    url: '/ajaxpage/'+page,
                    datatype: "html",
                    type: "get"

                }).done(function (response) {
                    console.log(response);
					let u = window.location.href;
					if(u == 'https://yemorkovin.ru/'){
						$("#data-wrapper").append(response);
					}
                    //$("#data-wrapper").append(response.html);
                }).fail(function (jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
            }
        }
    </script>
    <script type="text/javascript">
    $('.comments__write').on('click', function(){
         $('.comments__form').css('display', 'block');
    });
</script>
<style>
    .comments__form{
        display: none;
    }
</style>
<script>
function onClick(e) {
  e.preventDefault();
  grecaptcha.enterprise.ready(async () => {
    const token = await grecaptcha.enterprise.execute('6LdHY8wnAAAAALzfnIRsNufzNIUVj3n3Nw_Qf2U0', {action: 'LOGIN'});
    // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
    // reCAPTCHA Enterprise to the end user's browser.
    // This token must be validated by creating an assessment.
    // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
  });
}
</script>
<script>
$('.ajax-btn-add').on('click', function(e){
	e.preventDefault();
	let inp_name = $('.inp_name').val();
	let inp_email = $('.inp_email').val();
	let inp_comment = $('.inp_comment').val();
	let inp_post = $('.inp_post').val();
	
	if(inp_name.length>3){
		if(inp_email.length>3){
			if(inp_comment.length>3){
				 $.ajax({
					url: "/addcommentajax",
					type:"POST",
					data:{
						"_token":  'DdDI4wTBk9YUbKlgYt9z9fU0lt3ebZBnwZw30y9L',
						inp_name:inp_name,
						inp_email:inp_email,
						inp_comment:inp_comment,
						inp_post:inp_post
					},
					success:function(response){
						if(response !== 500){
							//window.location = "/";
							//alert(response);
							$('.comments__list').append(response);
							let art = $('.comments__title').text().split(' ');
							$('.comments__title').text((Number(art[0])+1) +' '+ art[1]);
							
						}
					},
				});
			}else{
				alert('Слишком короткая длина поля комментарий!');
			}
		}else{
			alert('Слишком короткая длина поля email!');
		}
	}else{
		alert('Слишком короткая длина поля имя!');
	}
	
});
</script>
</body>
</html>

