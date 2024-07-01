<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="revisit-after" content="7 days" >
    <meta name="description" content="Catalyze your brand's success with our versatile marketing agency. From innovative digital strategies to impactful campaigns, we specialize in elevating your online presence. Harness cutting-edge techniques in SEO, PPC, and social media to amplify your reach and drive conversions. Let us shape your narrative and propel your business to new heights in the digital realm.| افضل شركات التسويق الرقمى فى دول الخليج">
    <meta property="og:image" content="">
    <meta property="og:title" content="Ecomark Marketing | Your Brand's Success Partner">
    <meta property="og:description" content="افضل شركة تسويق فى دول الخليج|| تسويق رقمى للمتاجر الالكترونية|| تطوير مواقع الكترونية|| تنمية اعمال">
    <title>ايكومارك للتسويق الرقمي</title>
    <link rel="shortcut icon" href="" type="image/x-icon"> <!-- Add website favicon -->
    <meta name="description" content="...">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/main.js')}}"></script>
        <script>
            // public/js/lang-switcher.js

        function switchLanguage(locale) {
            let currentUrl = window.location.href;
            let newUrl;

            if (currentUrl.includes('/en')) {
                newUrl = currentUrl.replace('/en', `/${locale}`);
            } else if (currentUrl.includes('/ar')) {
                newUrl = currentUrl.replace('/ar', `/${locale}`);
            } else {
                // Default behavior if no language prefix is found
                let baseUrl = window.location.origin;
                let path = window.location.pathname;
                newUrl = baseUrl + `/${locale}` + path;
            }

            console.log('Current URL:', currentUrl);
            console.log('New URL:', newUrl);

            window.location.href = newUrl;
        }

            </script>
            <style>
                @import url("http://www.fontstatic.com/f=sky-bold,sky");
                @import url("http://www.fontstatic.com/f=dubai,dubai-light,dubai-medium,dubai-bold");
            </style>
</head>

<body>

   
@yield('content')
    
    

    
</body>
</html>