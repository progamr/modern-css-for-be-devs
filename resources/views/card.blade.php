<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSS for backend devs</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:400,700"/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/card.css" />
    <!--<link rel="stylesheet" href="css/normalize.css" />-->
</head>
<body class="flex items-center justify-center">
    <div class="card flex flex-row rounded-md">
        <!--left-->
        <div class="card-left flex flex-col justify-between rounded-md p-6 items-center text-center text-white">
            <a href="#" class="card-skill-button no-underline text-sm rounded-full py-1 px-6">PHP</a>

            <img src="testing-jargon-2.png" alt="" class="series-icon">

            <span class="card-difficulty text-xs">Intermediate Difficulty</span>
        </div>
        <!--right-->
        <div class="card-right flex flex-col p-6">
            <h3 class="text-black-600 font-light text-3xl mb-2"><a href="#" class="no-underline color-inherit">Testing Jargon</a></h3>
            <p class="flex-1 text-gray-600">
                There's no two ways about it: terminology in the testing world is incredibly overwhelming. Mocks, stubs, and dummies oh my!
            </p>
            <div class="flex text-sm">
                <div class="flex items-center mr-2">
                    <img src="book.svg" alt="" class="meta-icon mr-2">
                    5 Lessons
                </div>
                <div class="flex items-center">
                    <img src="clock.svg" alt="" class="meta-icon mr-2">
                    53:10 min
                </div>
            </div>
        </div>
    </div>
</body>
</html>
