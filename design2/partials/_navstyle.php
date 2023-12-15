<style>
        body {
            background-color: #FBFAFB;
        }
        .navbar {
            background-color: white;
        }
        .navbar-nav .nav-item.dropdown > a::after {
            content: none;
        }
        
        @media (max-width: 767px) {
            .profile {
            content: none;
            padding-left: 2vh;
        }
        }
    /* Custom class for larger padding on lg screens */
    @media (min-width: 768px) {
        .navbar {
            height: 80px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }
        /* Your styles for larger screens go here */
        .custom-padding-lg {
            padding-left: 30vh;
            padding-right: 30vh;
        }
        .link-container {
            position: relative;
            display: inline-block;
        }

        .link-with-box1::after {
            content: 'Home';
            position: absolute;
            color: white;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px 10px;
            background-color: #6B6C6E; /* Cloud-like box color */
            border: 1px solid #ccc;
            border-radius: 5px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .link-container:hover .link-with-box1::after {
            opacity: 1;
        }
        .link-with-box2::after {
            content: 'Write';
            position: absolute;
            color: white;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px 10px;
            background-color: #6B6C6E; /* Cloud-like box color */
            border: 1px solid #ccc;
            border-radius: 5px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .link-container:hover .link-with-box2::after {
            opacity: 1;
        }
        .link-with-box3::after {
            content: 'Write';
            position: absolute;
            color: white;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px 10px;
            background-color: #6B6C6E; /* Cloud-like box color */
            border: 1px solid #ccc;
            border-radius: 5px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .link-container:hover .link-with-box3::after {
            opacity: 1;
        }
    }
</style>