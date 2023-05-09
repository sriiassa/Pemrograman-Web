<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Javascript</title>
</head>
<body>

    <div id="artikel1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum architecto ipsam vel maxime tempora laboriosam asperiores, sint animi. Quisquam maiores cum accusamus, aut quasi praesentium delectus! Quisquam quibusdam voluptatem earum delectus officia voluptas nihil, similique architecto, quas, accusantium incidunt hic harum reprehenderit culpa repudiandae consequuntur deleniti illo quidem? Libero ipsa fugiat facilis tempora ducimus. Amet aperiam voluptatem unde, inventore impedit molestias ipsam quidem, est quisquam totam libero nam ullam dolore aspernatur, facere expedita? Ipsa repellat dolorum quae, cumque repudiandae debitis nam reiciendis ad deleniti expedita blanditiis omnis necessitatibus incidunt totam et. Nesciunt sit omnis inventore, fuga expedita quos totam blanditiis!</p>
    </div>
    <div class="artikel2">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus possimus libero quasi adipisci ducimus nesciunt praesentium delectus? Nobis aliquid maxime, illo, tempora id enim quisquam sint pariatur ex sit voluptatibus. Sequi, quibusdam provident unde commodi neque, ad dignissimos voluptatibus labore id inventore modi a quo, eveniet voluptatem natus? Qui, sequi?</p>
    </div>

    <script>
        document.getElementById("artikel1").style.color = "limegreen";
        const obj = document.getElementsByClassName("artikel2");
        obj[0].style.color = "red";
    </script>
    
</body>
</html>