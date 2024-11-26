@push('style')
    <style>
        body {
            font-family: "Inter", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .mobile-container {
            width: 100%;
            max-width: 480px;
            min-height: 140vh;
            height: 100%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header-with-icons {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            position: fixed;
            max-width: 480px;
            width: 100%;
            z-index: 10;
        }

        .header-with-icons .back-button {
            font-size: 24px;
            color: #10ABCF;
            cursor: pointer;
            margin-right: auto;
        }

        .header-title {
            font-size: 14px;
            font-weight: 500;
            margin: 5px 0px 0px 10px;
        }

        .header-with-icons .right-icon {
            font-size: 28px;
            cursor: pointer;
            margin-left: auto;
        }

        .header-with-icons .right-icon img {
            width: 28px;
            height: 28px;
        }

        .top-bar {
            padding: 20px;
            background-color: #fff;
            border-bottom: 12px solid #f5f5f5;
            padding-bottom: 15px;
            position: fixed;
            max-width: 480px;
            width: 100%;
            top: 50px;
            width: 100%;
            z-index: 9;
        }

        .search-filter-container {
            font-size: 14px;
            font-weight: 300;
            display: flex;
            flex-direction: column;
            padding-bottom: 20px;
            padding-top: 10px;
            margin-top: 70px;
        }

        .search-bar-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .icon-with-border {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 10px;
            background-color: #F6F6F6;
        }

        .icon-with-border i {
            font-size: 20px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 0px 10px 0px 10px;
            flex-grow: 1;
        }

        .search-bar i {
            margin-right: 10px;
        }

        .search-bar input {
            font-weight: 400;
            border: none;
            outline: none;
            font-size: 14px;
        }

        .filter-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .filter-container button {
            flex-grow: 1;
            border: none;
            border-radius: 20px;
            background-color: #F5F5F5;
            padding: 5px 15px;
            margin-right: 10px;
            cursor: pointer;
            font-weight: 300;
        }

        .filter-container button:last-child {
            margin-right: 0;
        }

        .filter-container button.active {
            background-color: #20B1D31A;
            color: #10ABCF;
            border: none;
        }

        .chat-list {
            padding: 20px;
            flex-grow: 1;
            padding-bottom: 60px;
            position: relative;
            overflow: auto;
            margin-top: 70px;
        }

        .hide-scrollbar::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .hide-scrollbar {
            overflow: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .your-chat {
            margin: 0px 0px 10px 0px;
            font-weight: 500;
        }

        .chat-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            text-decoration: none;
            color: inherit;
            transition: background-color 0.3s;
        }

        .chat-item:hover {
            background-color: #F5F5F5;
            width: 100%;
        }

        .chat-item img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .chat-item .chat-info {
            display: flex;
            align-items: center;
            flex-grow: 1;
            overflow: hidden;
        }

        .chat-item .chat-info .chat-name {
            font-weight: 500;
        }

        .chat-item .chat-info .chat-message {
            color: #979797;
            font-size: 12px;
            font-weight: 300;
        }

        .chat-item .chat-time {
            font-size: 12px;
            color: #888;
        }

        .chat-info {
            position: relative;
        }

        .status {
            position: absolute;
            bottom: 0px;
            left: 40px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            transform: translateY(-50%);
        }

        .status.online {
            background-color: #04BC00;
        }

        .status.offline {
            background-color: #8B8B8B;
        }

        .chat-new {
            position: absolute;
            top: 19px;
            right: 0;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background-color: red;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            font-weight: 500;
        }
    </style>

    <style>
        .mobile-container-chat {
            width: 100%;
            max-width: 480px;
            height: 100vh;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header-chat {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            position: sticky;
            top: 0;
            z-index: 10;
            background-color: #fff;
        }

        .profile {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 10px;
            /* Add margin to keep profile items away from the image and arrow */
            padding-top: 16px;
        }

        .profile .chat-name {
            font-weight: 600;
        }

        .profile .chat-time {
            color: #999;
            font-size: 14px;
        }

        /* Back Arrow Styling */
        .back-arrow {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .back-arrow i {
            font-size: 24px;
            color: #10ABCF;
        }

        .profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .chat-header {
            display: flex;
            align-items: center;
        }

        .chat-header .chat-name {
            margin-left: 10px;
            font-weight: 600;
        }

        .chat-header .chat-time {
            font-family: "Inter", system-ui;

            margin-left: 10px;
            color: #999;
            font-size: 14px;
        }

        /* Chat Content Styling */
        .chat-content {
            padding: 10px;
            flex-grow: 1;
            overflow-y: auto;
            -ms-overflow-style: none;
            scrollbar-width: none;
            background-image: url({{ url('asset/images/inbox_chat/b_chat.jpg') }});
        }

        .chat-message {
            display: flex;
            margin-bottom: 10px;
        }

        .talk-bubble {
            position: relative;
            padding: 15px;
            background-color: #fff;
            border: 2px solid #666;
            border-radius: 20px;
            max-width: 85%;
            margin-left: 15px;
            margin-right: auto;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* Ensure content starts from the left */
        }

        .talk-bubble p {
            margin: 0;
        }

        .talk-bubble .chat-time {
            font-size: 12px;
            align-self: flex-end;
            /* Align to the right side */
            margin-top: 5px;
        }

        .chat-content::-webkit-scrollbar {
            display: none;
        }

        .date-separator {
            text-align: center;
            margin: 10px 0;
            color: #999;
            font-size: 14px;
        }

        .chat-content .chat-time {
            margin-right: 10px;
            font-size: 14px;
        }

        /* Banner Product Styling */
        .banner-product {
            background-color: #f2f2f2;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            top: 56px;
            z-index: 9;
            column-gap: 10px;
        }

        .banner-product img {
            width: 200px;
            height: 130px;
        }

        /* Chat Message Styling */
        .chat-message {
            display: flex;
            margin-bottom: 10px;
        }

        /* Bubble untuk pesan lawan bicara (Other) */
        .chat-message.other .talk-bubble {
            position: relative;
            padding: 15px;
            background-color: #fff;
            border: 2px solid #666;
            border-radius: 20px;
            max-width: 85%;
            margin-left: 15px;
            margin-right: auto;
        }

        .chat-message.other .tri-right {
            position: relative;
        }

        /* Triangle di kiri atas untuk lawan bicara */
        .tri-right.border.left-top:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            right: auto;
            left: -22px;
            top: -1px;
            bottom: auto;
            border: 20px solid;
            border-color: #666 transparent transparent transparent;
            opacity: 16%;
        }


        .tri-right.left-top:after {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            right: auto;
            left: -20px;
            top: 0px;
            bottom: auto;
            border: 20px solid;
            border-color: #fff transparent transparent transparent;
        }

        /* Bubble untuk pesan pengguna (User) */
        .chat-message.user .talk-bubble {
            position: relative;
            padding: 15px;
            background-color: #37A6BB;
            border-radius: 20px;
            max-width: 85%;
            margin-left: auto;
            margin-right: 15px;
            color: #FFFFFF;

        }

        .chat-message.user .tri-right {
            position: relative;
        }

        /* Triangle di kanan atas untuk pengguna */
        .tri-right.border.right-top:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: -22px;
            top: -1px;
            bottom: auto;
            border: 20px solid;
            border-color: #666 transparent transparent transparent;
            opacity: 0%;
        }

        .tri-right.right-top:after {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: -20px;
            top: 0px;
            bottom: auto;
            border: 20px solid;
            border-color: #37A6BB transparent transparent transparent;
        }


        /* Quick Replies Styling */
        .quick-replies {
            display: flex;
            overflow-x: auto;
            overflow-y: hidden;
            padding: 10px;
            background-color: #ffffff;
            border-top: 1px solid #ddd;
            position: sticky;
            bottom: 60px;
            z-index: 10;
        }

        .quick-replies::-webkit-scrollbar {
            display: none;
        }

        .quick-replies button {
            padding: 10px 15px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            background-color: #ffffff;
            cursor: pointer;
            white-space: nowrap;

            /* Center text horizontally and vertically */
            display: flex;
            align-items: center;
            justify-content: center;

            /* Ensure text is aligned properly */
            text-align: center;
            vertical-align: middle;
        }

        /* Input Message Styling */
        .input-message {
            padding: 10px;
            border-top: 1px solid #ddd;
            display: flex;
            align-items: center;
            background-color: #ffffff;
            position: sticky;
            bottom: 0;
            z-index: 10;
        }

        .input-message input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            margin-right: 10px;
            outline: none;
        }

        .input-message input:focus {
            border-color: #37A6BB;
        }

        .input-message button {
            padding: 10px;
            border: none;
            border-radius: 50%;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .input-message img {
            line-height: 0;
            width: 28px;
            height: 28px;
        }

        .add-button,
        .file,
        .send-btn {
            padding: 10px;
            border: none;
            border-radius: 50%;
            color: #000000;
            font-size: 28px;
            margin-right: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .add-button i,
        .file i {
            line-height: 0;
            font-size: 28px;
            color: #000000;
        }

        /* Styling Pop-up */
        .popup-container {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px 20px 0 0;
            display: none;
            /* Initially hidden */
            z-index: 20;
            /* Ensure it's on top of other elements */
        }

        .popup-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .popup-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            cursor: pointer;
        }

        .popup-item i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        /* Styling Pop-up Nego Harga */
        .nego-popup {
            display: none;
            /* Pop-up tersembunyi secara default */
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            height: 90%;
            max-height: 90vh;
            /* Tinggi hampir memenuhi layar */
            background-color: #fff;
            z-index: 100;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
            padding-bottom: 20px;
        }

        .nego-content {
            padding: 20px;
        }

        .popup-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
            padding-bottom: 10px;
        }

        .back-button {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }

        .popup-header h4 {
            text-align: center;
            width: 100%;
            font-size: 18px;
            font-weight: 600;
        }


        p.info {
            font-size: 14px;
            color: #257AAA;
            margin-bottom: 20px;
            background-color: #DCF2FF;
            padding: 10px;
            border-radius: 5px;
        }

        .product-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .product-image {
            width: 80px;
            height: 80px;
            margin-right: 15px;
            border-radius: 5px;
            background-color: #e9ecef;
        }

        .product-details {
            flex-grow: 1;
        }

        .product-details h5 {
            margin: 0;
            font-size: 16px;
            font-weight: 500;
        }

        .product-details .product-price {
            font-size: 16px;
            font-weight: 700;
            color: #00bfa5;
        }

        .change-product {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        .price-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .price-field {
            width: 48%;
        }

        .price-field label {
            font-size: 14px;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        .note-section {
            margin-bottom: 20px;
        }

        .note-section textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: none;
            font-size: 14px;
        }

        .char-count {
            text-align: right;
            font-size: 12px;
            color: #999;
            margin-top: 5px;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #00bfa5;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
@endpush
