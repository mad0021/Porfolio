<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Webpage</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css'>
    <style>
        :root {
          --black: #333;
          --dark-red: rgba(255, 0, 0, 0.5);
          --grey: #666;
          --lighter-black: #19292e;
          --red: rgba(255, 0, 0, 0.75);
          --white: #f9fcff;
        }

        html {
          box-sizing: border-box;
          min-width: 400px;
        }

        *,
        *:before,
        *:after {
          box-sizing: inherit;
        }

        ::selection,
        ::-moz-selection {
          background: var(--red);
          color: var(--lighter-black);
        }

        @font-face {
          font-family: "Open Sans";
          font-style: normal;
          font-weight: 400;
          src: local("Open Sans"), local("OpenSans"),
            url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3bO3LdcAZYWl9Si6vvxL-qU.woff)
              format("woff");
        }

        @font-face {
          font-family: "Open Sans";
          font-style: normal;
          font-weight: 700;
          src: local("Open Sans Bold"), local("OpenSans-Bold"),
            url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzKRDOzjiPcYnFooOUGCOsRk.woff)
              format("woff");
        }

        html {
          background: var(--white);
          color: var(--black);
          font-size: 10px;
          font-family: "Avenir Next", Open Sans, sans-serif;
          line-height: 1.15;
          -ms-text-size-adjust: 100%;
          -webkit-text-size-adjust: 100%;
        }

        body {
          font-size: 1.8rem;
        }

        h1 {
          font-size: 4.8rem;
        }

        h2 {
          font-size: 4.7em;
        }

        h3 {
          font-size: 2.5em;
          text-align: center;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
          color: var(--lighter-black);
        }

        p,
        li {
          font-size: 2rem;
          line-height: 1.5;
        }

        ul {
          list-style: none;
          padding: 0;
        }

        a {
          box-shadow: inset 0 -0.5em var(--dark-red);
          color: var(--black);
          font-weight: bold;
          text-decoration: none;
          transition: all 0.4s cubic-bezier(0, 1, 0.3, 1);
        }

        a:hover {
          box-shadow: inset 0 -1.5em var(--red);
          color: var(--white);
        }

        .white-text {
          color: var(--white) !important;
        }

        .red-text {
          color: var(--red);
        }

        .text-center {
          text-align: center !important;
        }

        .grid-list {
          display: grid;
          grid-row-gap: 40px;
          grid-template-columns: repeat(4, minmax(100px, 1fr));
          text-align: center;
        }

        .grid-list > li > a:hover {
          color: var(--red);
        }

        section {
          align-content: center;
          display: grid;
          justify-content: center;
          min-height: 100vh;
          padding: 40px 30px 100px 30px;
        }

        section > div {
          max-width: 1000px;
          overflow: hidden;
        }

        .svg-image {
          fill: var(--white);
          height: 80px;
          padding: 5px;
          width: 80px;
        }

        header {
          height: 100vh;
          min-height: 1200px;
          overflow: hidden;
          position: relative;
        }

        header:after {
          content: "";
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .heading {
          color: var(--lighter-black);
          line-height: 1;
          margin: 0;
          position: absolute;
          left: 50%;
          top: 50%;
          text-shadow: -1px -1px 0 var(--white), 1px -1px 0 var(--white),
            -1px 1px 0 var(--white), 1px 1px 0 var(--white);
          -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          width: 30em;
          z-index: 10;
        }

        .intro {
          font-size: 8em;
          margin-bottom: 0;
        }

        .lead {
          color: var(--grey);
          font-size: 2em;
          margin-bottom: 60px;
        }

        .header-btn {
          background: var(--lighter-black);
          border: 2px solid var(--lighter-black);
          border-radius: 4px;
          box-shadow: none;
          color: var(--white);
          cursor: pointer;
          font-size: 90%;
          font-weight: normal;
          padding: 20px;
          text-shadow: none;
          transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .header-btn:hover {
          background: var(--white);
          box-shadow: none;
          color: var(--lighter-black);
        }

        .main-photo {
          background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/781613/profile/profile-512.jpg?1");
          background-position: center;
          background-size: cover;
          border: 7px solid var(--lighter-black);
          border-radius: 50%;
          height: 20em;
          position: absolute;
          top: calc(45% - 25.5em);
          left: calc(50% - 25em);
          width: 20em;
        }

        .main-photo:before {
          border: 7px solid var(--white);
          border-radius: 50%;
          content: " ";
          position: absolute;
          top: 1px;
          right: 1px;
          bottom: 1px;
          left: 1px;
          z-index: -1;
        }

        .portfolio-img svg {
          fill: var(--lighter-black);
          width: 100%;
        }

        .portfolio-img {
          -webkit-transform: translateY(5em);
          transform: translateY(5em);
        }

        .section-lead {
          margin-bottom: 60px;
        }

        #social-contact {
          cursor: pointer;
        }

        fieldset {
          border: none;
          padding: 0;
        }

        textarea {
          resize: none;
        }

        input,
        textarea,
        button {
          background: var(--white);
          border: 5px solid var(--lighter-black);
          border-radius: 4px;
          padding: 1em;
          width: 100%;
        }

        input:active,
        textarea:active {
          outline: var(--red);
        }

        form label {
          display: block;
          font-weight: bold;
        }

        .contact-form {
          display: grid;
          grid-gap: 20px;
          grid-template-columns: 1fr 1fr;
        }

        #contact-form-no-bots,
        #contact-form-message,
        #contact-form-submit {
          grid-column: 1 / -1;
        }

        #contact-form-submit {
          background-color: var(--lighter-black);
          color: var(--white);
          cursor: pointer;
          font-weight: bold;
          transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        #contact-form-submit:hover {
          background-color: var(--white);
          color: var(--lighter-black);
        }

        #contact-form-submit:active {
          background-color: var(--red);
          color: var(--lighter-black);
        }

        footer {
          background: var(--black);
          color: var(--white);
          padding: 20px 0;
          text-align: center;
        }

        .dark-bg {
          background: var(--lighter-black);
          color: var(--white);
        }

        .dark-bg a {
          color: var(--white);
          transition: all 0.4s cubic-bezier(0, 1, 0.3, 1);
        }

        .dark-bg a:hover {
          color: var(--black);
        }

        header {
          opacity: 0;
          -webkit-transition: opacity 0.5s 0.25s ease-out;
          transition: opacity 0.5s 0.25s ease-out;
        }

        header.is-visible {
          opacity: 1;
        }

        .main-photo {
          -webkit-transform: scale(0.8);
          transform: scale(0.8);
        }

        .heading {
          -webkit-transform: translate(-50%, calc(-50% + 5em));
          transform: translate(-50%, calc(-50% + 5em));
        }

        .is-visible .main-photo {
          -webkit-transform: none;
          transform: none;
        }

        .is-visible .heading {
          -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
        }

        .main-photo,
        .heading {
          -webkit-transition: -webkit-transform 4s 0.25s cubic-bezier(0, 1, 0.3, 1);
          transition: -webkit-transform 4s 0.25s cubic-bezier(0, 1, 0.3, 1);
          transition: transform 4s 0.25s cubic-bezier(0, 1, 0.3, 1);
          transition: transform 4s 0.25s cubic-bezier(0, 1, 0.3, 1),
            -webkit-transform 4s 0.25s cubic-bezier(0, 1, 0.3, 1);
          will-change: transform;
        }

        .grid-list,
        .portfolio-img {
          opacity: 0;
          -webkit-transition: opacity 0.3s 0.25s ease-out,
            -webkit-transform 1.5s 0.25s cubic-bezier(0, 1, 0.3, 1);
          transition: opacity 0.3s 0.25s ease-out,
            -webkit-transform 1.5s 0.25s cubic-bezier(0, 1, 0.3, 1);
          transition: transform 1.5s 0.25s cubic-bezier(0, 1, 0.3, 1),
            opacity 0.3s 0.25s ease-out;
          transition: transform 1.5s 0.25s cubic-bezier(0, 1, 0.3, 1),
            opacity 0.3s 0.25s ease-out,
            -webkit-transform 1.5s 0.25s cubic-bezier(0, 1, 0.3, 1);
          will-change: transform, opacity;
        }

        .grid-list.slide-left {
          -webkit-transform: translateX(-4em);
          transform: translateX(-4em);
        }

        .grid-list.slide-right {
          -webkit-transform: translateX(4em);
          transform: translateX(4em);
        }

        .grid-list.is-visible {
          opacity: 1;
          -webkit-transform: translateX(0);
          transform: translateX(0);
        }

        .portfolio-img.is-visible {
          opacity: 1;
          -webkit-transform: translateY(0);
          transform: translateY(0);
        }

        @media only screen and (max-width: 700px) {
          .grid-list {
            grid-template-columns: repeat(3, minmax(100px, 1fr));
          }
        }

        @media only screen and (max-width: 600px) {
          header {
            min-height: 80px;
            overflow: hidden;
            position: relative;
          }

          .main-photo {
            top: 0;
            left: 0;
          }

          .heading {
            top: 50%;
            width: 20em;
          }

          .intro {
            font-size: 6em;
          }

          .lead {
            font-size: 1.5em;
            width: 100%;
          }

          .grid-list {
            grid-template-columns: repeat(2, minmax(100px, 1fr));
          }
        }

        @media only screen and (max-width: 550px) {
          .contact-form {
            grid-template-columns: 1fr;
          }
        }

        @media only screen and (max-width: 450px) {
          h2 {
            font-size: 3.7em;
          }

          .contact-form {
            grid-template-columns: 1fr;
          }
        }
    </style>
</head>
<body>
<header class="header show-on-scroll">
        <div class="main-photo"></div>
        <div class="heading">
            <h1 class="intro">Hello, my name is Mamamdou</h1>
            <p class?="lead">I'm a cross-platform application developer. I love HTML, CSS, and JavaScript.</p>
            <p><a id="header-btn" class="header-btn">Contact Me</a></p>
        </div>
    </header>

    <section id="about" class="dark-bg">

        <div class="about-summary">
            <h2 class="white-text">About me</h2>
            <p>
                Education and certification programs:
            </p>
            <ul>
                <li>
                    <strong>Education:</strong>
                    <ul>
                        <li>High School - Institut Santiago Sobrequés i Vidal, Girona, Spain (2014 - 2018)</li>
                        <li>Bachelor's Degree - Institut Santiago Sobrequés i Vidal, Girona, Spain (2018 - 2021)</li>
                        <li>Higher Degree in Application Development - Institut Montilivi, Girona, Spain (2022-2025)</li>
                    </ul>
                </li>
                <li>
                    <strong>Certifications:</strong>
                    <ul>
                        <li>Professional Certification - [IFCD0112] Object-oriented Programming and Relational Databases - Institut Montilivi, Girona, Spain (2023 - 2024)</li>
                        <li>Verified Certificate from edX - IDB_UC3M.1x: Fundamentals of Cybersecurity: A Practical Approach</li>
                    </ul>
                </li>
            </ul>
            <p>
                I'm open to job opportunities, and my CV is available on request.
            </p>
        </div>

        <div class="about-skills">

            <h3 class="white-text">Skills</h3>
                <ul class="grid-list slide-left show-on-scroll">
                    <li>
                        <div class="about-svg-conatainer">
                            <svg width="80px" height="80px" viewBox="-16 0 288 288" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                <g>
                                    <path d="M255.569,84.452376 C255.567,79.622376 254.534,75.354376 252.445,71.691376 C250.393,68.089376 247.32,65.070376 243.198,62.683376 C209.173,43.064376 175.115,23.505376 141.101,3.86637605 C131.931,-1.42762395 123.04,-1.23462395 113.938,4.13537605 C100.395,12.122376 32.59,50.969376 12.385,62.672376 C4.064,67.489376 0.015,74.861376 0.013,84.443376 C0,123.898376 0.013,163.352376 0,202.808376 C0,207.532376 0.991,211.717376 2.988,215.325376 C5.041,219.036376 8.157,222.138376 12.374,224.579376 C32.58,236.282376 100.394,275.126376 113.934,283.115376 C123.04,288.488376 131.931,288.680376 141.104,283.384376 C175.119,263.744376 209.179,244.186376 243.209,224.567376 C247.426,222.127376 250.542,219.023376 252.595,215.315376 C254.589,211.707376 255.582,207.522376 255.582,202.797376 C255.582,202.797376 255.582,123.908376 255.569,84.452376" fill="#A179DC" fill-rule="nonzero"></path>
                                    <path d="M128.182,143.241376 L2.988,215.325376 C5.041,219.036376 8.157,222.138376 12.374,224.579376 C32.58,236.282376 100.394,275.126376 113.934,283.115376 C123.04,288.488376 131.931,288.680376 141.104,283.384376 C175.119,263.744376 209.179,244.186376 243.209,224.567376 C247.426,222.127376 250.542,219.023376 252.595,215.315376 L128.182,143.241376" fill="#28068" fill-rule="nonzero"></path>
                                    <path d="M255.569,84.452376 C255.567,79.622376 254.534,75.354376 252.445,71.691376 L128.182,143.241376 L252.595,215.315376 C254.589,211.707376 255.58,207.522376 255.582,202.797376 C255.582,202.797376 255.582,123.908376 255.569,84.452376" fill="#390091" fill-rule="nonzero"></path>
                                    <path d="M201.892326,116.294008 L201.892326,129.767692 L215.36601,129.767692 L215.36601,116.294008 L222.102852,116.294008 L222.102852,129.767692 L235.576537,129.767692 L235.576537,136.504534 L222.102852,136.504534 L222.102852,149.978218 L235.576537,149.978218 L235.576537,156.71506 L222.102852,156.71506 L222.102852,170.188744 L215.36601,170.188744 L215.36601,156.71506 L201.892326,156.71506 L201.892326,170.188744 L195.155484,170.188744 L195.155484,156.71506 L181.6818,156.71506 L181.6818,149.978218 L195.155484,149.978218 L195.155484,136.504534 L181.6818,136.504534 L181.6818,129.767692 L195.155484,129.767692 L195.155484,116.294008 L201.892326,116.294008 Z M215.36601,136.504534 L201.892326,136.504534 L201.892326,149.978218 L215.36601,149.978218 L215.36601,136.504534 Z" fill="#FFFFFF"></path>
                                    <path d="M128.456752,48.625876 C163.600523,48.625876 194.283885,67.7121741 210.718562,96.0819435 L210.558192,95.808876 L169.209615,119.617159 C161.062959,105.823554 146.128136,96.5150717 128.996383,96.3233722 L128.456752,96.3203544 C102.331178,96.3203544 81.1506705,117.499743 81.1506705,143.625316 C81.1506705,152.168931 83.4284453,160.17752 87.3896469,167.094792 C95.543745,181.330045 110.872554,190.931398 128.456752,190.931398 C146.149522,190.931398 161.565636,181.208041 169.67832,166.820563 L169.481192,167.165876 L210.767678,191.083913 C194.51328,219.21347 164.25027,238.240861 129.514977,238.620102 L128.456752,238.625876 C93.2021701,238.625876 62.4315028,219.422052 46.0382398,190.902296 C38.0352471,176.979327 33.4561922,160.837907 33.4561922,143.625316 C33.4561922,91.1592636 75.9884604,48.625876 128.456752,48.625876 Z" fill="#FFFFFF" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="svg-title-container">C Sharp</div>
                    </li>

                    <li>
                        <div class="about-svg-conatainer">
                            <svg width="80px" height="80px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 28L4 3H28L26 28L16 31L6 28Z" fill="#E44D26"/>
                                <path d="M26 5H16V29.5L24 27L26 5Z" fill="#F16529"/>
                                <path d="M9.5 17.5L8.5 8H24L23.5 11H11.5L12 14.5H23L22 24L16 26L10 24L9.5 19H12.5L13 21.5L16 22.5L19 21.5L19.5 17.5H9.5Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="svg-title-container">HTML</div>
                    </li>

                    <li>
                        <div class="about-svg-conatainer">
                            <svg width="80px" height="80px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 28L4 3H28L26 28L16 31L6 28Z" fill="#1172B8"/>
                                <path d="M26 5H16V29.5L24 27L26 5Z" fill="#33AADD"/>
                                <path d="M19.5 17.5H9.5L9 14L17 11.5H9L8.5 8.5H24L23.5 12L17 14.5H23L22 24L16 26L10 24L9.5 19H12.5L13 21.5L16 22.5L19 21.5L19.5 17.5Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="svg-title-container">CSS</div>
                    </li>

                    <li>
                        <div class="about-svg-conatainer">
                            <svg width="80px" height="80px" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                <g>
                                    <path d="M0,0 L256,0 L256,256 L0,256 L0,0 Z" fill="#F7DF1E"></path>
                                    <path d="M67.311746,213.932292 L86.902654,202.076241 C90.6821079,208.777346 94.1202286,214.447137 102.367086,214.447137 C110.272203,214.447137 115.256076,211.354819 115.256076,199.326883 L115.256076,117.528787 L139.313575,117.528787 L139.313575,199.666997 C139.313575,224.58433 124.707759,235.925943 103.3984,235.925943 C84.1532952,235.925943 72.9819429,225.958603 67.3113397,213.93026" fill="#000000"></path>
                                    <path d="M152.380952,211.354413 L171.969422,200.0128 C177.125994,208.433981 183.827911,214.619835 195.684368,214.619835 C205.652521,214.619835 212.009041,209.635962 212.009041,202.762159 C212.009041,194.513676 205.479416,191.592025 194.481168,186.78207 L188.468419,184.202565 C171.111213,176.81473 159.597308,167.53534 159.597308,147.944838 C159.597308,129.901308 173.344508,116.153295 194.825752,116.153295 C210.119924,116.153295 221.117765,121.48094 229.021663,135.400432 L210.29059,147.428775 C206.166146,140.040127 201.699556,137.119289 194.826159,137.119289 C187.78047,137.119289 183.312254,141.587098 183.312254,147.428775 C183.312254,154.646349 187.78047,157.568406 198.089956,162.036622 L204.103924,164.614095 C224.553448,173.378641 236.067352,182.313448 236.067352,202.418387 C236.067352,224.071924 219.055137,235.927975 196.200432,235.927975 C173.860978,235.927975 159.425829,225.274311 152.381359,211.354413" fill="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="svg-title-container">JavaScript</div>
                    </li>

                    <li>
                        <div class="about-svg-conatainer">
                            <svg width="80px" height="80px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-label="PHP" role="img">
                                <rect width="512" height="512" rx="15%" fill="#777bb3"></rect>
                                <g stroke="#ffffff" stroke-width="6">
                                    <path id="a" d="M155 202H97a3 3 0 0 0-3 2L67 345c0 3 3 3 3 3h30c3 0 3-2 3-2l7-35h27c42 0 63-28 68-53s1-56-50-56zm13 54c-4 19-17 27-35 27h-18l11-53h18c27 0 26 10 24 26z"></path>
                                    <path d="M275 311c-4 0-3-4-3-4l12-61c0-8 6-16-18-15h-18l-15 78s0 3-4 3h-29c-3 0-3-3-3-3l28-141s0-2 4-2h30c3 0 2 3 2 3l-7 34h26c36 0 45 17 42 37l-13 69s0 3-5 3z"></path>
                                    <use xlink:href="#a" x="239"></use>
                                </g>                       
                            </svg>
                        </div>
                        <div class="svg-title-container">PHP</div>
                    </li>

                    <li>
                        <div class="about-svg-conatainer">
                            <svg width="80px" height="80px" viewBox="0 -0.5 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                <defs>
                                    <linearGradient x1="12.9593594%" y1="12.0393928%" x2="79.6388325%" y2="78.2008538%" id="linearGradient-1">
                                        <stop stop-color="#387EB8" offset="0%"></stop>
                                        <stop stop-color="#366994" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="19.127525%" y1="20.5791813%" x2="90.7415328%" y2="88.4290372%" id="linearGradient-2">
                                        <stop stop-color="#FFE052" offset="0%"></stop>
                                        <stop stop-color="#FFC331" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g>
                                    <path d="M126.915866,0.0722755491 C62.0835831,0.0722801733 66.1321288,28.1874648 66.1321288,28.1874648 L66.2044043,57.3145115 L128.072276,57.3145115 L128.072276,66.0598532 L41.6307171,66.0598532 C41.6307171,66.0598532 0.144551098,61.3549438 0.144551098,126.771315 C0.144546474,192.187673 36.3546019,189.867871 36.3546019,189.867871 L57.9649915,189.867871 L57.9649915,159.51214 C57.9649915,159.51214 56.801363,123.302089 93.5968379,123.302089 L154.95878,123.302089 C154.95878,123.302089 189.434218,123.859386 189.434218,89.9830604 L189.434218,33.9695088 C189.434218,33.9695041 194.668541,0.0722755491 126.915866,0.0722755491 L126.915866,0.0722755491 L126.915866,0.0722755491 Z M92.8018069,19.6589497 C98.9572068,19.6589452 103.932242,24.6339846 103.932242,30.7893845 C103.932246,36.9447844 98.9572068,41.9198193 92.8018069,41.9198193 C86.646407,41.9198239 81.6713721,36.9447844 81.6713721,30.7893845 C81.6713674,24.6339846 86.646407,19.6589497 92.8018069,19.6589497 L92.8018069,19.6589497 L92.8018069,19.6589497 Z" fill="url(#linearGradient-1)"></path>
                                    <path d="M128.757101,254.126271 C193.589403,254.126271 189.540839,226.011081 189.540839,226.011081 L189.468564,196.884035 L127.600692,196.884035 L127.600692,188.138693 L214.042251,188.138693 C214.042251,188.138693 255.528417,192.843589 255.528417,127.427208 C255.52844,62.0108566 219.318366,64.3306589 219.318366,64.3306589 L197.707976,64.3306589 L197.707976,94.6863832 C197.707976,94.6863832 198.87285,130.896434 162.07613,130.896434 L100.714182,130.896434 C100.714182,130.896434 66.238745,130.339138 66.238745,164.215486 L66.238745,220.229038 C66.238745,220.229038 61.0044225,254.126271 128.757101,254.126271 L128.757101,254.126271 L128.757101,254.126271 Z M162.87116,234.539597 C156.715759,234.539597 151.740726,229.564564 151.740726,223.409162 C151.740726,217.253759 156.715759,212.278727 162.87116,212.278727 C169.026563,212.278727 174.001595,217.253759 174.001595,223.409162 C174.001618,229.564564 169.026563,234.539597 162.87116,234.539597 L162.87116,234.539597 L162.87116,234.539597 Z" fill="url(#linearGradient-2)"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="svg-title-container">Python</div>
                    </li>

                    
                    <li>
                        <div class="about-svg-conatainer">
                            <svg width="80px" height="80px" viewBox="0 0 32 32" fill="#E44D26" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.58536 17.4132C1.80488 16.6327 1.80488 15.3673 2.58536 14.5868L14.5868 2.58536C15.3673 1.80488 16.6327 1.80488 17.4132 2.58536L29.4146 14.5868C30.1951 15.3673 30.1951 16.6327 29.4146 17.4132L17.4132 29.4146C16.6327 30.1951 15.3673 30.1951 14.5868 29.4146L2.58536 17.4132Z" fill="#EE513B"/>
                                <path d="M12.1489 5.06152L10.9336 6.27686L14.0725 9.41577C13.9455 9.68819 13.8746 9.99201 13.8746 10.3124C13.8746 11.222 14.4461 11.9981 15.2496 12.3012V19.9798C14.4461 20.2829 13.8746 21.059 13.8746 21.9686C13.8746 23.1422 14.826 24.0936 15.9996 24.0936C17.1732 24.0936 18.1246 23.1422 18.1246 21.9686C18.1246 21.144 17.6549 20.429 16.9684 20.0768V12.3117L19.9689 15.3122C19.8481 15.5791 19.7809 15.8754 19.7809 16.1874C19.7809 17.361 20.7323 18.3124 21.9059 18.3124C23.0795 18.3124 24.0309 17.361 24.0309 16.1874C24.0309 15.0138 23.0795 14.0624 21.9059 14.0624C21.6778 14.0624 21.4582 14.0983 21.2522 14.1648L18.0297 10.9423C18.0914 10.7433 18.1246 10.5317 18.1246 10.3124C18.1246 9.13878 17.1732 8.18738 15.9996 8.18738C15.7803 8.18738 15.5688 8.22061 15.3697 8.2823L12.1489 5.06152Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="svg-title-container">Git (for GitHub)</div>
                    </li>

                    <li>
                        <div class="about-svg-conatainer">
                                <svg fill="#000000" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80px" height="80px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                    <g id="5151e0c8492e5103c096af88a51eafb7">
                                        <path display="inline" d="M295.474,319.537c0.826,4.135,1.24,11.37,1.24,21.707v80.997h-22.327v-80.129
                                            c0-9.097-0.868-15.894-2.604-20.404c-1.737-4.507-4.817-8.104-9.241-10.792c-4.424-2.683-9.613-4.031-15.567-4.031
                                            c-9.51,0-17.717,3.019-24.622,9.055c-6.905,6.037-10.357,17.49-10.357,34.359v71.942h-22.327V290.512h20.094v18.73
                                            c9.675-14.472,23.65-21.707,41.925-21.707c7.938,0,15.236,1.426,21.893,4.279c6.657,2.853,11.64,6.595,14.947,11.226
                                            S294.15,313.17,295.474,319.537z M511.5,423.052c-6.284,1.323-11.908,1.984-16.869,1.984c-8.104,0-14.389-1.281-18.854-3.845
                                            c-4.465-2.563-7.607-5.934-9.427-10.109c-1.819-4.172-2.729-12.962-2.729-26.358v-79.542h-48.475
                                            c0.111,0.12,0.235,0.219,0.347,0.339c11.164,11.99,16.746,28.859,16.746,50.608c0,1.322-0.042,3.308-0.124,5.953h-98.239
                                            c0.827,14.472,4.92,25.553,12.279,33.243c7.36,7.69,16.539,11.535,27.537,11.535c8.187,0,15.174-2.149,20.963-6.45
                                            c5.788-4.3,10.378-11.163,13.769-20.59l23.071,2.853c-3.639,13.479-10.378,23.939-20.219,31.382s-22.41,11.164-37.708,11.164
                                            c-19.268,0-34.545-5.934-45.832-17.8c-11.288-11.862-16.932-28.509-16.932-49.926c0-22.162,5.706-39.362,17.117-51.601
                                            c11.412-12.238,26.214-18.357,44.406-18.357c2.199,0,4.354,0.095,6.454,0.281h84.839v-28.579h22.203v28.579h22.451v17.365h-22.451
                                            v80.782c0,6.367,0.393,10.461,1.178,12.28c0.786,1.819,2.067,3.267,3.846,4.341c1.777,1.075,4.32,1.613,7.628,1.613
                                            c2.481,0,5.747-0.29,9.8-0.869L511.5,423.052z M408.672,343.725c-0.993-11.081-3.805-19.392-8.435-24.932
                                            c-7.112-8.601-16.332-12.9-27.661-12.9c-10.254,0-18.875,3.432-25.862,10.295c-6.987,6.864-10.854,16.043-11.598,27.537H408.672z
                                            M157.881,395.42c-4.035,0-7.459,1.435-10.279,4.354c-2.82,2.898-4.217,6.405-4.217,10.548c0,4.035,1.397,7.529,4.217,10.473
                                            c2.82,2.944,6.244,4.425,10.279,4.425c4.139,0,7.662-1.48,10.56-4.425c2.906-2.943,4.35-6.438,4.35-10.473
                                            c0-4.044-1.443-7.55-4.35-10.489C165.542,396.875,162.02,395.42,157.881,395.42z M301.047,267.196
                                            c-11.577,5.086-26.172,7.629-43.785,7.629c-30.928,0-52.345-5.954-64.253-17.862c-0.05-0.05-0.096-0.103-0.146-0.152l5.604,14.913
                                            h-58.84l-9.101-30.018H66.737l-8.865,30.018H0.5L68.846,89.883h61.292l45.653,121.494l50.461-3.161
                                            c1.158,8.683,3.514,15.3,7.07,19.847c5.789,7.361,14.058,11.039,24.808,11.039c8.021,0,14.203-1.879,18.544-5.644
                                            c4.342-3.763,6.513-8.125,6.513-13.086c0-4.714-2.067-8.932-6.202-12.652c-4.135-3.722-13.728-7.235-28.777-10.544
                                            c-24.642-5.538-42.214-12.899-52.716-22.078c-10.585-9.18-15.877-20.88-15.877-35.104c0-9.344,2.708-18.172,8.125-26.482
                                            c5.416-8.311,13.562-14.841,24.436-19.598c10.874-4.755,25.779-7.133,44.716-7.133c23.237,0,40.954,4.323,53.151,12.962
                                            c12.197,8.642,19.453,22.39,21.769,41.243l-52.965,3.102c-1.405-8.187-4.362-14.141-8.869-17.862
                                            c-4.506-3.721-10.729-5.581-18.667-5.581c-6.533,0-11.453,1.385-14.761,4.155c-3.308,2.771-4.961,6.14-4.961,10.108
                                            c0,2.896,1.364,5.502,4.093,7.814c2.646,2.4,8.931,4.633,18.854,6.698c24.56,5.293,42.152,10.649,52.778,16.063
                                            c10.626,5.416,18.358,12.137,23.195,20.156c2.479,4.109,4.312,8.472,5.521,13.079V89.883h93.401
                                            c20.342,0,35.578,4.837,45.708,14.512c10.13,9.676,15.195,23.443,15.195,41.306c0,18.357-5.521,32.705-16.56,43.041
                                            c-11.04,10.339-27.889,15.505-50.546,15.505h-30.762v67.478h-56.438v-44.868c-1.574,6.286-4.216,12.271-7.939,17.952
                                            C321.638,254.649,312.624,262.111,301.047,267.196z M392.464,167.407h13.769c10.832,0,18.44-1.88,22.823-5.645
                                            c4.383-3.762,6.573-8.577,6.573-14.45c0-5.706-1.901-10.543-5.705-14.513c-3.804-3.969-10.957-5.954-21.459-5.954h-16.001V167.407z
                                            M118.871,202.386l-20.07-65.368l-19.863,65.368H118.871z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                        <div class="svg-title-container">ASP.NET</div>
                    </li>

                    <li>
                        <div class="about-svg-conatainer">
                                <svg width="80px" height="80px" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg">
                                    <g fill-rule="evenodd" clip-rule="evenodd">
                                        <path fill="#ffffff" d="M0 0h192.756v192.756H0V0z"/>
                                        <path d="M80.372 101.729s-4.604 2.679 3.28 3.584c9.554 1.091 14.434.934 24.959-1.057 0 0 2.771 1.735 6.639 3.236-23.601 10.113-53.413-.585-34.878-5.763zM77.487 88.532s-5.165 3.823 2.726 4.639c10.206 1.054 18.262 1.14 32.211-1.544 0 0 1.926 1.955 4.957 3.023-28.531 8.345-60.307.657-39.894-6.118z" fill="#3174b9"/>
                                        <path d="M101.797 66.143c5.818 6.697-1.525 12.72-1.525 12.72s14.766-7.621 7.984-17.168c-6.332-8.899-11.189-13.32 15.102-28.566-.001-.001-41.27 10.303-21.561 33.014z" fill="#ca3132"/>
                                        <path d="M133.01 111.491s3.408 2.81-3.754 4.983c-13.619 4.125-56.694 5.369-68.659.164-4.298-1.872 3.766-4.467 6.303-5.015 2.646-.572 4.156-.468 4.156-.468-4.783-3.368-30.916 6.615-13.272 9.479 48.112 7.801 87.704-3.512 75.226-9.143zM82.587 74.857s-21.908 5.205-7.757 7.097c5.977.799 17.883.615 28.982-.316 9.068-.761 18.17-2.389 18.17-2.389s-3.195 1.371-5.51 2.949c-22.251 5.853-65.229 3.127-52.855-2.856 10.462-5.061 18.97-4.485 18.97-4.485zM121.891 96.824c22.617-11.75 12.16-23.044 4.859-21.522-1.785.373-2.586.695-2.586.695s.666-1.042 1.932-1.49c14.441-5.075 25.545 14.972-4.656 22.911-.001 0 .347-.314.451-.594z" fill="#3174b9"/>
                                        <path d="M108.256 8.504s12.523 12.531-11.881 31.794c-19.571 15.458-4.462 24.269-.006 34.34-11.426-10.307-19.807-19.382-14.185-27.826 8.254-12.395 31.125-18.406 26.072-38.308z" fill="#ca3132"/>
                                        <path d="M84.812 128.674c21.706 1.388 55.045-.771 55.836-11.044 0 0-1.518 3.894-17.941 6.983-18.529 3.488-41.386 3.082-54.938.845 0 0 2.777 2.298 17.043 3.216z" fill="#3174b9"/>
                                        <path d="M139.645 147.096h-.66v-.37h1.781v.37h-.66v1.848h-.461v-1.848zm3.554.092h-.008l-.656 1.755h-.301l-.652-1.755h-.008v1.755h-.438v-2.218h.643l.604 1.569.604-1.569h.637v2.218h-.424v-1.755h-.001zM81.255 167.921c-2.047 1.774-4.211 2.772-6.154 2.772-2.768 0-4.27-1.663-4.27-4.324 0-2.881 1.608-4.989 8.044-4.989h2.379v6.541h.001zm5.65 6.374v-19.732c0-5.043-2.876-8.371-9.809-8.371-4.045 0-7.591.999-10.474 2.272l.83 3.495c2.271-.834 5.207-1.607 8.089-1.607 3.994 0 5.713 1.607 5.713 4.934v2.495h-1.996c-9.702 0-14.08 3.764-14.08 9.423 0 4.876 2.885 7.648 8.316 7.648 3.491 0 6.099-1.441 8.534-3.55l.443 2.993h4.434zM105.762 174.295h-7.045l-8.483-27.601h6.154l5.265 16.961 1.172 5.096c2.656-7.371 4.541-14.854 5.484-22.057h5.984c-1.602 9.088-4.488 19.066-8.531 27.601zM132.799 167.921c-2.053 1.774-4.217 2.772-6.156 2.772-2.768 0-4.268-1.663-4.268-4.324 0-2.881 1.609-4.989 8.041-4.989h2.383v6.541zm5.652 6.374v-19.732c0-5.043-2.885-8.371-9.811-8.371-4.049 0-7.594.999-10.477 2.272l.83 3.495c2.271-.834 5.213-1.607 8.096-1.607 3.988 0 5.709 1.607 5.709 4.934v2.495h-1.996c-9.703 0-14.078 3.764-14.078 9.423 0 4.876 2.879 7.648 8.311 7.648 3.494 0 6.098-1.441 8.539-3.55l.445 2.993h4.432zM58.983 178.985c-1.61 2.353-4.214 4.216-7.061 5.267l-2.79-3.286c2.169-1.113 4.027-2.91 4.892-4.582.745-1.49 1.056-3.406 1.056-7.992v-31.515h6.005v31.08c0 6.134-.49 8.613-2.102 11.028z" fill="#ca3132"/>
                                    </g>
                                </svg>
                        </div>
                            <div class="svg-title-container">Java</div>
                    </li>

                    <li>
                        <div class="about-svg-conatainer">
                            <svg width="80px" height="80px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" aria-label="WordPress" role="img" viewBox="0 0 512 512">
                                <rect width="512" height="512" rx="15%" fill="#05a8da"/>
                                <circle cx="256" cy="256" fill="none" r="182" stroke="#ffffff" stroke-width="20"/>
                                <path d="m315 424 28-15 54-156c10-25 13-45 13-62 0-32-13-60-36-63-21-2-33 19-32 31 2 29 31 45 31 85 0 28-18 73-31 117l-62-187 20-1c10 0 9-15-1-14-31 3-60 2-92 0-10-1-10 14-1 14l18 1 27 74-38 114-63-188 20-1c9 0 8-15-1-14-29 2-57 4-64-1l-8 24 84 233 25 14 54-158" fill="#ffffff"/>
                            </svg>
                        </div>
                        <div class="svg-title-container">WordPress</div>
                    </li>

                    <li>
                            <div class="about-svg-conatainer">
                                <svg width="80px" height="80px" viewBox="0 0 73 73" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <rect id="path-1" x="4" y="4" width="69" height="69" rx="14"></rect>
                                    </defs>
                                        <g id="build-tools/typescript" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="container" transform="translate(-2.000000, -2.000000)">
                                                <rect id="mask" stroke="#003355" stroke-width="2" fill="#FFFFFF" fill-rule="nonzero" x="3" y="3" width="71" height="71" rx="14"></rect>
                                                    <mask id="mask-2" fill="white">
                                                        <use xlink:href="#path-1"></use>
                                                    </mask>
                                                        <rect stroke="#003355" stroke-width="2" x="3" y="3" width="71" height="71" rx="14"></rect>
                                                            <g id="logo" mask="url(#mask-2)" fill="#007ACC" fill-rule="nonzero">
                                                                <g id="Group" transform="translate(36.500000, 36.500000) scale(-1, 1) rotate(-180.000000) translate(-36.500000, -36.500000) ">
                                                                    <path d="M0,36.5 L0,0 L36.5,0 L73,0 L73,36.5 L73,73 L36.5,73 L0,73 L0,36.5 Z M58.8287302,39.4084127 C60.6826984,38.9449206 62.0963492,38.1222222 63.394127,36.7780952 C64.0661905,36.0596825 65.0626984,34.7503175 65.1438095,34.4374603 C65.1669841,34.3447619 61.9920635,32.2126984 60.0685714,31.0192063 C59.9990476,30.9728571 59.7209524,31.274127 59.4080952,31.737619 C58.4695238,33.1049206 57.4846032,33.695873 55.978254,33.801587 C53.7650794,33.9507937 52.3398413,32.7920635 52.3514286,30.8569841 C52.3514286,30.2892063 52.4325397,29.9531746 52.6642857,29.4896825 C53.1509524,28.4815873 54.0547619,27.8790476 56.8936508,26.6507937 C62.1195238,24.4028571 64.355873,22.9196825 65.7463492,20.8107937 C67.2990476,18.4585714 67.6466667,14.7042857 66.5922222,11.911746 C65.4334921,8.87587302 62.5598413,6.81333333 58.515873,6.12968254 C57.2644444,5.90952381 54.2980952,5.94428571 52.9539683,6.18761905 C50.022381,6.70904762 47.2414286,8.15746032 45.5265079,10.0577778 C44.8544444,10.7993651 43.5450794,12.7344444 43.6261905,12.8734921 C43.6609524,12.9198413 43.9622222,13.1052381 44.298254,13.3022222 C44.6226984,13.487619 45.8509524,14.1944444 47.0096825,14.8665079 L49.1069841,16.0831746 L49.5473016,15.4342857 C50.1614286,14.4957143 51.5055556,13.2095238 52.3166667,12.7807937 C54.6457143,11.5525397 57.8438095,11.7263492 59.4196825,13.14 C60.091746,13.754127 60.3698413,14.3914286 60.3698413,15.33 C60.3698413,16.175873 60.2655556,16.5466667 59.8252381,17.1839683 C59.2574603,17.9950794 58.0987302,18.6787302 54.8079365,20.1039683 C51.0420635,21.7261905 49.4198413,22.7342857 47.9366667,24.3333333 C47.0792063,25.2603175 46.2680952,26.7434921 45.9320635,27.9833333 C45.6539683,29.0146032 45.5844444,31.5985714 45.8046032,32.6414286 C46.5809524,36.2798413 49.3271429,38.8174603 53.29,39.5706349 C54.5761905,39.8139683 57.5657143,39.7212698 58.8287302,39.4084127 Z M41.6911111,36.3609524 L41.7142857,33.3714286 L36.9634921,33.3714286 L32.2126984,33.3714286 L32.2126984,19.8722222 L32.2126984,6.37301587 L28.852381,6.37301587 L25.4920635,6.37301587 L25.4920635,19.8722222 L25.4920635,33.3714286 L20.7412698,33.3714286 L15.9904762,33.3714286 L15.9904762,36.3030159 C15.9904762,37.9252381 16.0252381,39.2809524 16.0715873,39.3157143 C16.1063492,39.3620635 21.8884127,39.3852381 28.8987302,39.3736508 L41.6563492,39.3388889 L41.6911111,36.3609524 Z" id="Shape"></path>
                                                                </g>
                                                            </g>
                                            </g>
                                        </g>
                                </svg>
                            </div>
                            <div class="svg-title-container">Typescript</div>
                    </li>
                </ul>
            </div>

            <div class="about-programs">
            <h3 class="white-text">Programs</h3>
                <ul class="grid-list slide-right show-on-scroll">
                        <li>
                            <div class="about-svg-conatainer">
                                <svg width="80px" height="80px" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                    <defs>
                                        <linearGradient x1="49.9999997%" y1="0.00244053108%" x2="49.9999997%" y2="99.999641%" id="linearGradient-1">
                                            <stop stop-color="#FFFFFF" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" stop-opacity="0" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g>
                                        <path d="M36.9866667,200.406215 C33.9280235,203.019746 29.6590738,203.689992 25.9466667,202.139549 L6.56,194.006215 C2.60661593,192.357112 0.0232284231,188.503034 0,184.219549 L0,70.4595487 C0.0232284231,66.1760633 2.60661593,62.3219852 6.56,60.6728821 L25.9466667,52.6728821 C29.6590738,51.122439 33.9280235,51.7926847 36.9866667,54.4062154 L41.3333333,58.0062154 C39.5360867,56.7141841 37.1664204,56.5381696 35.1980103,57.5504947 C33.2296003,58.5628199 31.9944221,60.5927545 32,62.8062154 L32,191.872882 C31.9944221,194.086343 33.2296003,196.116278 35.1980103,197.128603 C37.1664204,198.140928 39.5360867,197.964913 41.3333333,196.672882 L36.9866667,200.406215 Z" fill="#52218A" fill-rule="nonzero"></path>
                                        <path d="M6.56,194.006215 C2.60661593,192.357112 0.0232284231,188.503034 0,184.219549 L0,183.339549 C0.0268934047,185.858586 1.58492217,188.107394 3.9339112,189.017627 C6.28290023,189.927861 8.94941357,189.316063 10.6666667,187.472882 L176,4.67288206 C180.797767,-0.101060222 188.080373,-1.3397438 194.186667,1.57954873 L246.933333,26.9662154 C252.477775,29.6321062 256.002663,35.2408256 256,41.3928821 L256,42.0062154 C255.996628,38.1026642 253.745578,34.5500434 250.217325,32.8799659 C246.689073,31.2098885 242.514491,31.7209739 239.493333,34.1928821 L41.3333333,196.672882 L36.9866667,200.406215 C33.9280235,203.019746 29.6590738,203.689992 25.9466667,202.139549 L6.56,194.006215 Z" fill="#6C33AF" fill-rule="nonzero"></path>
                                        <path d="M6.56,60.6728821 C2.60661593,62.3219852 0.0232284231,66.1760633 0,70.4595487 L0,71.3395487 C0.0268934047,68.8205111 1.58492217,66.5717033 3.9339112,65.6614701 C6.28290023,64.7512369 8.94941357,65.3630345 10.6666667,67.2062154 L176,250.006215 C180.797767,254.780158 188.080373,256.018841 194.186667,253.099549 L246.933333,227.712882 C252.477775,225.046991 256.002663,219.438272 256,213.286215 L256,212.672882 C255.996628,216.576433 253.745578,220.129054 250.217325,221.799132 C246.689073,223.469209 242.514491,222.958124 239.493333,220.486215 L41.3333333,58.0062154 L36.9866667,54.2728821 C33.9010187,51.7044121 29.634528,51.0860801 25.9466667,52.6728821 L6.56,60.6728821 Z" fill="#854CC7" fill-rule="nonzero"></path>
                                        <path d="M194.186667,253.099549 C188.080373,256.018841 180.797767,254.780158 176,250.006215 C178.687118,252.67399 182.713996,253.466025 186.211298,252.014645 C189.7086,250.563265 191.991405,247.152711 192,243.366215 L192,11.3662154 C192.012965,7.57001396 189.738069,4.13973417 186.235938,2.67467621 C182.733808,1.20961825 178.694002,1.99824786 176,4.67288206 C180.797767,-0.101060222 188.080373,-1.3397438 194.186667,1.57954873 L246.933333,26.9395487 C252.477775,29.6054395 256.002663,35.214159 256,41.3662154 L256,213.312882 C256.002663,219.464938 252.477775,225.073658 246.933333,227.739549 L194.186667,253.099549 Z" fill="#B179F1" fill-rule="nonzero"></path>
                                        <path d="M183.706667,254.272882 C187.232219,255.077301 190.926299,254.663714 194.186667,253.099549 L246.933333,227.739549 C252.477775,225.073658 256.002663,219.464938 256,213.312882 L256,41.3662154 C256.002663,35.214159 252.477775,29.6054395 246.933333,26.9395487 L194.186667,1.57954873 C190.454554,-0.214455828 186.172257,-0.491658077 182.24,0.806215393 C179.888439,1.59407912 177.752219,2.9178052 176,4.67288206 L90.9866667,98.6995487 L41.3333333,58.0062154 L36.9866667,54.2728821 C34.3333065,52.0042454 30.7377412,51.1775642 27.36,52.0595487 C26.8727028,52.1672022 26.3987371,52.3281717 25.9466667,52.5395487 L6.56,60.6728821 C2.86046907,62.2004243 0.327434334,65.670476 0,69.6595487 C0,69.9262154 0,70.1928821 0,70.4595487 L0,184.219549 C0,184.486215 0,184.752882 0,185.019549 C0.327434334,189.008621 2.86046907,192.478673 6.56,194.006215 L25.9466667,202.006215 C26.3987371,202.217592 26.8727028,202.378562 27.36,202.486215 C30.7377412,203.3682 34.3333065,202.541519 36.9866667,200.272882 L41.3333333,196.672882 L90.9866667,155.979549 L176,250.006215 C178.119066,252.121513 180.789161,253.599766 183.706667,254.272882 L183.706667,254.272882 Z M192,73.1528821 L125.893333,127.339549 L192,181.526215 L192,73.1528821 Z M32,90.7262154 L65.0933333,127.339549 L32,163.952882 L32,90.7262154 Z" fill-opacity="0.25" fill="url(#linearGradient-1)"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="svg-title-container">Visual Studio</div>
                        </li>

                        <li>
                            <div class="about-svg-conatainer">
                            <svg height="80" viewBox="-11.9 -2 1003.9 995.6" width="80" xmlns="http://www.w3.org/2000/svg"><path d="m12.1 353.9s-24-17.3 4.8-40.4l67.1-60s19.2-20.2 39.5-2.6l619.2 468.8v224.8s-.3 35.3-45.6 31.4z" fill="#2489ca"/>
                            <path d="m171.7 498.8-159.6 145.1s-16.4 12.2 0 34l74.1 67.4s17.6 18.9 43.6-2.6l169.2-128.3z" fill="#1070b3"/>
                            <path d="m451.9 500 292.7-223.5-1.9-223.6s-12.5-48.8-54.2-23.4l-389.5 354.5z" fill="#0877b9"/>
                            <path d="m697.1 976.2c17 17.4 37.6 11.7 37.6 11.7l228.1-112.4c29.2-19.9 25.1-44.6 25.1-44.6v-671.2c0-29.5-30.2-39.7-30.2-39.7l-197.7-95.3c-43.2-26.7-71.5 4.8-71.5 4.8s36.4-26.2 54.2 23.4v887.5c0 6.1-1.3 12.1-3.9 17.5-5.2 10.5-16.5 20.3-43.6 16.2z" fill="#3c99d4"/>
                        </svg>
                            </div>
                            <div class="svg-title-container">Visual Studio Code</div>
                        </li>

                        <li>
                            <div class="about-svg-container">
                                <svg width="80px" height="80px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Development" transform="translate(-912.000000, -48.000000)">
                                                <g id="terminal_box_fill" transform="translate(912.000000, 48.000000)">
                                                    <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"></path>
                                                    <path d="M3,5 C3,3.89543 3.89543,3 5,3 L19,3 C20.1046,3 21,3.89543 21,5 L21,19 C21,20.1046 20.1046,21 19,21 L5,21 C3.89543,21 3,20.1046 3,19 L3,5 Z M9.05037,15.5357 C8.65985,15.9262 8.02668,15.9262 7.63616,15.5357 C7.24563,15.1451 7.24563,14.512 7.63616,14.1214 L9.75748,12.0001 L7.63616,9.8788 C7.24563,9.48828 7.24563,8.85511 7.63616,8.46459 C8.02668,8.07406 8.65985,8.07406 9.05037,8.46459 L11.8788,11.293 C12.2693,11.6835 12.2693,12.3167 11.8788,12.7072 L9.05037,15.5357 Z M14.0001,14.0001 C13.4478,14.0001 13.0001,14.4478 13.0001,15.0001 C13.0001,15.5524 13.4478,16.0001 14.0001,16.0001 L16.0001,16.0001 C16.5524,16.0001 17.0001,15.5524 17.0001,15.0001 C17.0001,14.4478 16.5524,14.0001 16.0001,14.0001 L14.0001,14.0001 Z" id="形状" fill="#09244B"></path>
                                                </g>
                                            </g>
                                        </g>
                                </svg>
                            </div>
                            <div class="svg-title-container">Terminal</div>
                        </li>

                        <li>
                            <div class="about-svg-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 1620.996 394.734">
                                    <path fill="#183861" d="M1321.502 193.503c1.913-2.256 3.87-4.388 5.62-6.684 15.063-19.51 15.306-41.453 6.664-62.658-8.217-20.228-27.289-25.116-47.518-25.255-16.158-.119-32.313.398-48.434-.238-9.279-.359-12.35 2.532-12.27 12.088.557 61.004.599 122.006.618 183.008 0 6.864.736 11.353 9.415 11.075 18.53-.618 37.165.677 55.576-.918 28.445-2.475 47.438-19.33 53.642-45.005 7.186-29.704.225-49.534-23.313-65.413zm-55.738-39.817h.078c0-3.591-.041-7.163.021-10.751.198-14.084 9.134-19.549 21.185-12.569 10.271 5.965 10.753 16.239 10.753 26.714 0 10.372-3.271 19.091-12.688 23.917-12.589 6.443-19.213 1.737-19.332-12.967-.058-4.788-.017-9.557-.017-14.344zm9.634 122.823c-7.617-.438-10.295-3.032-9.956-10.652.541-11.849-.359-23.758.419-35.59.439-6.383-4.449-16.099 3.948-18.631 10.193-3.112 21.246-1.456 29.225 7.898 5.768 6.762 6.363 15.08 7.541 22.543.458 23.781-10.852 35.63-31.177 34.432zM463.487 259.58c10.417-50.686 22.673-99.969 22.65-151.069-.002-6.673 2.132-9.018 9.098-9.759 31.604-3.363 32.816-2.241 28.025 29.547-8.167 54.194-19.354 107.743-32.434 160.97-2.837 11.55-6.513 15.53-18.489 15.462-40.647-.227-40.89.292-50.094-39.229-11.901-51.107-22.677-102.44-31.35-154.225-1.616-9.653-.571-12.287 9.625-12.593 31.621-.945 31.753-1.408 37.024 29.223 6.875 39.924 13.512 79.891 20.183 119.852.684 4.115.728 8.39 5.762 11.821zM1489.484 197.194c-6.563-32.116-22.858-47.198-52.464-48.395-34.151-1.397-55.118 13.228-63.717 44.725-3.331 12.149-4.806 24.579-4.567 37.244.778 9.496.719 19.13 2.476 28.448 6.084 32.155 21.981 47.196 50.209 48.514 34.851 1.617 57.432-13.445 65.73-44.944 5.707-21.565 6.841-43.53 2.333-65.592zm-41.807 69.86c-2.216 7.861-8.021 13.248-17.178 13.146-9.095-.098-13.925-5.706-17.234-13.305-5.486-12.509-3.671-25.896-4.788-38.921.802-13.064-.799-26.451 4.909-38.838 3.45-7.501 9.059-13.246 17.754-12.89 7.96.321 13.248 6.008 15.439 13.187 7.859 25.695 8.397 51.749 1.098 77.621zM919.491 288.691c-4.017 2.814-5.548 3.696-6.858 4.834-13.285 11.548-27.816 18.997-45.656 11.611-16.833-6.978-19.956-22.521-21.732-38.202a327.02 327.02 0 0 1-2.079-33.952c-.182-21.52.883-43.063.181-64.556-.413-12.739 2.814-16.963 16.729-17.653 18.479-.918 23.321 4.629 22.188 22.697-1.718 27.392-1.397 55.009-.168 82.451.919 20.531 13.32 26.794 27.95 16.601 6.809-4.741 5.968-11.009 5.932-17.459-.173-29.892.477-59.823-.98-89.652-.759-15.505 7.75-14.76 17.763-13.921 9.411.789 21.818-5.312 21.178 13.965-1.348 40.609-.283 81.296-.988 121.934-.104 5.899 6.365 17.725-8.051 16.815-10.143-.637-25.583 7.409-25.409-15.513zM1093.13 182.291c-1.677-16.316-12.05-27.89-27.749-31.52-22.122-5.146-43.665-.858-64.292 8.678-9.017 4.169-5.11 10.993-4.287 16.816 1.016 7.42 6.86 7.28 12.368 5.524 10.41-3.331 21.064-4.727 31.777-3.252 14.682 2.057 16.196 12.987 16.595 25.276.439 13.743-9.416 8.756-16.036 9.974-7.582 1.378-15.46 1.936-22.683 4.407-21.065 7.183-31.161 23.58-32.618 44.728-1.135 16.736 3.354 32.794 19.852 40.814 19.549 9.496 37.023 3.592 52.064-11.071.802-.798 1.955-1.257 6.225-3.909-2.354 18.833 9.616 15.56 19.371 15.697 5.463.079 10.892.68 10.709-7.718-.818-38.136 2.652-76.381-1.296-114.444zm-54.92 96.672c-12.367.302-13.902-8.597-13.844-18.373.119-16.297 8.297-24.777 23.779-24.338 9.377.262 9.377.262 9.434 19.372 2.394 13.507-3.212 22.941-19.369 23.339zM1561.681 188.532c5.493-9.162 7.222-18.563 9.579-27.753 1.665-6.495 5.189-9.211 12.567-9.669 32.686-2.032 34.845-1.061 18.111 26.979-17.359 29.096-18.955 55.098-.587 83.64 7.909 12.285 12.312 26.825 19.643 43.361-17.217-3.624-35.414 7.523-46.187-6.188-9.027-11.483-10.935-28.564-16.499-44.635-7.409 12.15-9.817 24.703-13.135 36.951-2.898 10.704-33.423 19.907-41.32 12.436-3.443-3.255-.237-6.46 1.154-9.508 8.416-18.391 16.511-36.948 25.442-55.087 4.563-9.27 5.219-17.428.536-27.022-8.08-16.556-14.531-33.907-22.449-50.552-4.031-8.481-1.439-9.776 6.739-10.324 32.153-2.147 32.112-2.385 42.046 27.422 1.07 3.193 2.703 6.198 4.36 9.949zM786.78 131.298c-1.42 10.916-2.713 22.519 16.564 20.779 9.501-.858 5.357 8.538 6.145 13.691.955 6.277-.97 10.901-8.48 9.636-13.873-2.336-15.445 5.209-15.165 16.535.559 22.666-.212 45.362-.03 68.044.084 10.641 1.262 21.361 16.412 19.286 8.459-1.159 7.519 5.136 8.995 9.966 1.764 5.774 1.295 9.702-4.833 13.153-27.994 15.771-57.134-.118-57.97-32.495-.68-26.248-.17-52.529-.418-78.791-.067-7.11 3.011-15.746-10.038-16.334-5.687-.252-6.698-21.728-1.248-22.18 21.974-1.829 15.026-20.955 20.469-32.34 3.122-6.539 1.483-14.125 13.19-15.099 22.732-1.884 15.077 13.68 16.407 26.149zM1138.93 189.435c0-29.278.869-58.594-.302-87.828-.79-19.687 12.71-12.142 21.618-13.176 9.784-1.133 18.13-1.866 17.736 13.603-1.3 51.366-1.306 102.771-1.143 154.158.035 10.694-4.994 24.837 14.06 27.469 5.276.73 2.336 9.444 3.013 14.493.809 6.047-4.041 5.771-8.031 7.002-30.724 9.485-46.139-1.422-46.315-33.256-.151-27.488-.03-54.976-.03-82.464l-.606-.001zM677.728 176.445c7.201-9.239 12.204-16.315 17.901-22.779 5.469-6.202 13.441-5.985 20.049-3.666 8.729 3.064 2.126 10.129 1.847 15.333-.621 11.723.682 21.84-18.105 23.949-11.509 1.296-18.732 18.345-18.555 33.555.271 23.322-.822 46.683.135 69.968.734 17.818-11.729 10.936-19.512 11.382-7.734.441-18.073 4.701-17.765-11.306.803-41.851.241-83.729-.158-125.596-.092-9.935-.16-17.398 13.712-16.229 11.258.952 22.568-.908 19.854 16.189-.322 1.996.232 4.134.597 9.2z"/><path fill="#1A3A62" d="M597.047 228.749c0 21.48-.331 42.973.164 64.441.195 8.542-2.609 10.988-11.157 11.309-27.14 1.017-27.124 1.427-27.203-25.654-.115-37.594.569-75.215-.697-112.771-.596-17.659 10.495-13.491 19.808-13.506 9.329-.015 20.854-4.103 19.71 13.543-1.348 20.8-.316 41.753-.316 62.637l-.309.001z"/><path fill="#1B3B63" d="M577.049 128.514c-15.667.674-21.219-8.651-21.202-22.412.017-14.565 7.658-21.441 22.495-21.328 14.886.112 22.043 7.396 22.376 21.742.347 15.099-7.672 22.352-23.669 21.998z"/><ellipse fill="#323A53" cx="170.672" cy="307.678" rx="98.732" ry="87.057"/><path fill="#EFF1F4" d="M170.672 394.735c-54.527 0-98.729-38.975-98.729-87.055 0-48.082 44.203-87.061 98.729-87.061v174.116z"/><path fill="#D2E2ED" d="M286.247 51.145c14.335 6.239 28.698 12.415 42.984 18.761 3.363 1.493 5.854 4 5.813 8.119-.711 1.342-1.496 2.594-3.274 2.582-1.839-.321-3.355.421-4.783 1.461-1.133.647-2.207 1.55-3.655.896-1.813-3.353-1.778-3.292-5.215-1.372-2.54 1.416-4.798 3.473-7.901 3.718-5.522-1.376-11.063-2.698-16.458-4.555-3.224-1.11-3.699-1.944-1.658-4.52 1.668-2.104.759-2.937-1.039-3.823-2.041-1.007-4.033-2.126-6.208-2.84-23.82-10.904-47.621-21.851-71.495-32.632-1.044-.471-2.02-1.257-3.099-1.438-1.729-.293-3.151-3.87-5.255-.596-4.861-1.059-9.117-3.613-13.549-5.678-7.464-3.471-15.137-6.501-22.317-10.559-1.188-1.354-2.591-1.264-4.076-.582-4.264 2.13-8.737 3.796-12.918 6.088-4.099 1.174-7.474 4.198-11.855 4.656-.793-.102-1.593-.149-2.392-.218-4.217-.345-5.462-2.914-3.297-6.594 3.162-5.374 8.216-8.539 13.444-11.422 5.013-2.765 10.141-5.313 15.426-7.543 2.955-1.249 5.778-1.151 8.651.076 21.993 9.425 43.825 19.23 65.839 28.614 15.467 6.59 30.811 13.507 46.635 19.235.532.198 1.07.421 1.652.166z"/><path fill="#EBF0F5" d="M2.016 103.422c-1.697-3.17-.494-6.68-1.15-10.039-.905-4.654-.817-9.526-.864-14.31-.041-4.244 1.958-7.509 5.916-9.244 13.901-6.101 27.845-12.104 41.753-18.188 13.691-5.99 27.359-12.038 41.037-18.057A16586.814 16586.814 0 0 1 123.2 18.437c.604-.264 1.332-.246 2.002-.359-.558 3.28-3.589 3.909-5.852 5.108-7.378 3.918-14.862 7.639-22.333 11.378-1.813.908-4.62 1.86-4.542 3.699.08 2.077 3.215 1.926 4.972 2.83 2.14 1.102 4.402.861 6.722.516 1.64-.246 3.67-1.159 4.653 1.284-.665 1.022-1.776 1.41-2.786 1.913-16.959 8.448-34.387 15.883-51.576 23.835-3.936 1.818-7.793 3.808-11.927 5.176-2.918 2.852-6.277 2.581-10.059 2.077-7.002-.933-14.101-.439-21.157-.248-2.599.072-4.547 1.347-5.522 3.87-2.658 2.397-2.227 5.488-1.875 8.535.517 4.481.732 8.981.776 13.494-.48 1.212-1.333 1.9-2.68 1.877z"/><path fill="#E1EAF1" d="M108.688 42.802c-1.183-1.086-2.747-.914-3.901-.479-5.068 1.902-9.036-1.228-13.372-2.647-1.465-.479-1.274-1.447-.258-2.281 1.143-.937 2.264-1.973 3.563-2.639 7.918-4.055 15.905-7.984 23.83-12.028 2.417-1.234 4.838-2.523 6.654-4.644 4.007-2.703 8.621-4.125 12.972-6.093 8.225-3.711 16.638-7.008 24.798-10.847 3.461-1.629 6.379-1.435 9.72.052a9680.395 9680.395 0 0 0 58.633 25.877c17.16 7.514 34.364 14.919 51.542 22.384 1.154.504 2.256 1.122 3.381 1.69-1.201 1.373-2.374.147-3.45-.16-9.274-2.639-17.784-7.175-26.686-10.742-25.039-10.02-49.474-21.43-74.263-32.019-3.259-1.391-6.542-2.719-9.754-4.208-3.273-1.521-6.354-1.224-9.543.318-7.822 3.784-15.783 7.318-22.708 12.687-2.298 1.778-3.773 4.294-5.262 6.705-1.088 1.762.359 3.803 2.501 4 1.102.099 2.317-.373 3.26.597-.325 1.44-1.586 1.863-2.703 2.36-8.409 3.745-16.74 7.651-25.087 11.532-1.201.553-2.439 1.332-3.867.585z"/><path fill="#DBE0E8" d="M14.404 257.577c-1.125-3.36-.879-6.907-1.397-10.355-.89-11.124-1.799-22.249-2.657-33.377-.528-6.818-.914-13.649-1.466-20.466-.836-10.326-1.926-20.636-2.586-30.972-.415-6.486-.992-12.956-1.495-19.431-.836-10.783-1.479-21.583-2.673-32.338-.264-2.383-.086-4.813-.11-7.218.67-.467 1.337-.938 2.007-1.403 1.369.791 1.635 2.151 1.718 3.538.741 12.433 1.894 24.833 2.876 37.242 1.032 12.981 2.13 25.957 3.135 38.938.772 10.019 1.787 20.021 2.276 30.062 1.028 11.851 1.866 23.721 2.844 35.582.246 2.984 2.543 4.482 4.075 6.551.602 1.506 1.598 2.899 1.363 4.653-1.023 1.262-1.724.058-2.534-.323-.943-.744-1.967-1.383-2.833-2.223-.31-.264-.609-.537-.97-.712-1.282.237-.598 1.829-1.573 2.252z"/><path fill="#8D9EBD" d="M333.159 107.525c-.468 6.429-.934 12.86-1.403 19.293 1.744 2.949-.223 5.987.226 8.967-.595 3.614-.582 7.282-.946 10.916a145.085 145.085 0 0 0-1.183 15.529c-.188 1.42-.504 2.796-1.373 3.983-1.014.791-2.044 1.448-3.281.388-.634-4.234.239-8.4.564-12.597.41-10.569 1.602-21.081 2.402-31.621.215-2.84.452-5.665.434-8.512.766-8.607 1.615-17.216 2.107-25.848.039-.686.182-1.355.489-1.968 2.08-1.585 1.969 1.371 3.195 1.557.265 6.681-.943 13.268-1.231 19.913z"/><path fill="#B5C2D4" d="M334.39 87.614c-2.734 1.304-1.738-1.052-2.066-2.108-1.224-1.715-1.243-3.568-.636-5.494 1.552.066 2.118-1.533 3.356-1.984-.193 3.195.751 6.472-.654 9.586z"/><path fill="#27334E" d="M151.906 23.481l13.137-6.146c1.53-.411 2.925.028 4.285.688l35.74 16.427c5.22.357 9.376 3.507 13.911 5.546 21.283 9.589 42.438 19.476 63.74 29.032 1.318.714 2.647 1.416 4.019 2.033.727.331 1.451.661 2.17 1.002 1.395.657 3.481.825 3.521 2.737.031 1.631-1.835 2.139-3.081 2.869-7.06 4.151-14.201 8.169-21.237 12.358-1.461.639-2.816 1.467-4.146 2.337-.41.263-.835.5-1.265.729-18.957 10.967-37.951 21.871-56.853 32.932-11.156 6.298-22.231 12.747-33.287 19.221-3.438 2.016-6.476 2.047-9.956.065-12.326-7.021-24.409-14.463-36.914-21.163-8.117-4.627-16.481-8.825-24.263-14.032-8.248-5.182-16.805-9.832-25.213-14.735C65.725 89.263 55.19 83.223 44.67 77.157c-1.068-.616-2.338-1.121-2.225-2.729.75-1.133 2.008-1.446 3.146-1.958C58.296 66.758 70.923 60.877 83.6 55.103c17.776-8.1 35.532-16.238 53.301-24.352 5.047-2.306 10.338-4.163 15.005-7.27z"/><path fill="#FDFDFE" d="M101.892 109.403l24.001 14.07c2.807 3.235 4.647 7.081 6.693 10.78 2.977 5.386 6.99 9.467 12.708 12.033 6.161 2.768 12.206 5.767 18.467 8.348 4.042 1.664 8.027 1.829 12.107 1.418 3.749-.38 7.549-1.005 11.084-2.325 10.384-3.87 20.873-7.378 30.562-13.056 14.031-8.221 28.131-16.332 42.024-24.788 1.172-.714 2.43-1.307 3.202-2.524 3.68-3.474 8.351-5.422 12.561-8.081 2.104-1.332 4.302-2.531 6.448-3.81 8.583-5.16 17.197-10.271 25.772-15.447.875-.528 1.756-1.074 2.816-1.162 2.959-1.593 5.897-3.238 8.886-4.777 3.315-1.711 3.872-1.336 4.167 2.627-.902 2.487-3.249 3.411-5.226 4.651-12.084 7.582-24.47 14.674-36.546 22.273-35.592 21.045-70.806 42.717-106.212 64.071-2.795 1.688-4.004 3.685-3.937 6.93.154 7.441.028 14.891.071 22.34a8.878 8.878 0 0 1-.466 2.964c-1.036 3.876-1.773 7.778-1.11 11.803.169 1.026.205 2.053.25 3.081 1.005 21.985.662 43.988.692 65.986.023 13.188-.002 26.373.014 39.556-.023 6.918-.016 13.837 0 20.752.003 1.362.134 2.731-.657 3.959-2.079 1.549-3.897 1.058-5.557-.708-.629-1.146-.688-2.407-.688-3.664.004-19.553-.125-39.104.049-58.652 1.15-12.831 2.02-25.658.908-38.561-.491-5.688-.132-11.428-.124-17.141.005-3.556-.639-7.028-1.191-10.512-.654-8.434-.174-16.88-.295-25.32-.07-5.02-.01-10.043-.015-15.068-.002-1.955-.078-3.89-1.188-5.597-1.019-2.471-3.171-3.489-5.506-4.271-6.632-2.75-12.188-7.386-18.576-10.567-15.595-9.708-31.383-19.092-47.068-28.652-14.412-8.734-28.77-17.563-43.269-26.155-7.898-5.04-15.984-9.771-23.976-14.656-2.013-1.252-4.068-2.429-6.062-3.707-1.019-.654-2.272-1.142-2.339-2.654 1.411-3.197 2.32-3.579 5.818-2.035 7.231 3.19 14.016 7.234 20.837 11.195 2.997 1.74 6.047 3.24 9.586 3.429.455.026.959.047 1.336.272 5.698 3.462 12.271 4.781 18.27 7.504 1.457.662 2.81 1.664 4.454 1.643 7.102-.066 14.038 2.077 21.169 1.476 1.755-.142 3.369.524 5.056.729z"/><path fill="#516494" d="M281.424 108.92c10.291-6.319 20.549-12.696 30.893-18.932a169.347 169.347 0 0 0 11.073-7.28c1.422.313 2.186-1.184 3.463-1.263.991 1.729.104 3.218-.957 4.323-3.778 3.928-5.021 9.099-7.046 13.876-.93 2.193-1.646 4.496-2.292 6.79-1.156 4.106-4.324 6.53-7.274 9.169-.646.987-1.614 1.604-2.587 2.208-27.796 17.324-55.586 34.657-83.376 51.987-.875.545-1.707 1.166-2.731 1.415-1.936-.335-3.31 2.14-5.391 1.084-.637-1.393.249-2.27 1.211-2.854 5.561-3.373 9.341-8.339 12.584-13.798 5.462-9.195 14.234-14.75 22.814-20.399 6.894-4.539 13.522-9.475 19.935-14.583 3.84-3.059 7.992-6.579 9.681-11.743z"/><path fill="#DAE7F0" d="M310.339 84.858c-3.781 3.334-8.4 5.362-12.631 7.983-5.13 3.18-10.39 6.146-15.595 9.204-9.412 3.116-19.139 2.315-28.8 2.265-1.29-.007-2.661-.373-2.979-1.825-.334-1.522.709-2.603 1.855-3.411 3.432-2.434 7.364-4.1 10.604-6.836l.755-.453c1.767-.055 2.898-1.215 4.054-2.333 8.179-4.84 16.357-9.677 24.601-14.549-1.67-1.845-4.274-1.71-5.919-3.294-.138-.981-1.25-1.271-1.531-2.151.039-.147.086-.296.13-.442 3.211.243 5.69 2.25 8.421 3.6 2.017 1.003 1.004 2.319-.089 3.564-2.469 2.825-2.319 2.622 1.236 3.911 5.218 1.885 10.805 2.49 15.888 4.767z"/><path fill="#5A6E9E" d="M308.991 115.15c-.797-1.226.439-1.292 1.001-1.56 3.003-1.445 4.547-4.077 5.579-7.005 1.769-5.031 3.389-10.096 5.614-14.972 1.006-2.202 1.87-4.323 3.753-5.91 1.309-1.1 1.503-2.735 1.916-4.258 1.413-1.151 2.718-2.657 4.833-1.434 1.102 1.729.566 3.648.636 5.495-1.516 3.306-.708 6.901-1.127 10.344-.729 5.923-.941 11.935-1.602 17.894-3.845 9.996-6.96 20.286-11.855 29.871-.936 1.831-1.891 3.656-3.26 5.209-.669.759-1.409 1.692-2.563 1.336-1.023-.318-.986-1.434-1.11-2.316-.111-.796-.414-1.542-.541-2.334.334-7.619.95-15.225 1.544-22.825.188-2.398.48-4.753.056-7.122-.837-.96-1.986.178-2.874-.413z"/><path fill="#ECEEEF" d="M282.618 69.814c-11.962-5.387-23.945-10.729-35.879-16.173-13.913-6.351-27.782-12.791-41.671-19.194.631-1.707 1.433-1.885 3.213-1.063 24.234 11.203 48.525 22.282 72.787 33.419 1.334.61 2.796 1.04 3.818 2.208l-.012.021c-.607.672-1.313 1.07-2.256.782z"/><path fill="#2D2E31" d="M151.906 23.481c-1.236 2.533-3.975 2.813-6.107 3.82-9.599 4.535-19.315 8.813-28.973 13.218a55460.58 55460.58 0 0 0-63.237 28.89c-3.634 1.661-7.232 3.401-10.848 5.105-.472-.414-.466-.869-.109-1.349 19-8.696 38.003-17.389 56.999-26.094 3.035-1.391 6.037-2.844 9.057-4.271 10.553-4.826 21.104-9.654 31.657-14.479 3.854-1.612 7.708-3.226 11.561-4.84z"/><path fill="#868887" d="M169.327 18.021c-1.521.342-2.867-.399-4.286-.688 1.596-.81 3.174-1.505 4.286.688z"/><path fill="#C0BFCC" d="M15.751 85.576c2.769 1.807 5.538 3.614 8.308 5.418.995.994 1.729 2.146 1.947 3.546.886 5.663 2.87 11.044 4.287 16.568.629 2.448.375 4.051-2.417 4.467-1.898.687-3.296-1.845-5.246-.807-.786 4.002.213 7.966.513 11.877.329 4.296.58 8.633.929 12.93.821 10.091 1.362 20.207 2.253 30.298.071.794-.01 1.599-.179 2.388-.784 2.803-.574 5.672-.313 8.491 1.086 11.645 1.609 23.332 2.587 34.982.124 1.465.123 2.964-.181 4.425-1.334 2.743-3.305 2.414-5.323.95-3.617-2.618-7.027-5.479-9.871-8.954-.896-10.646-1.82-21.29-2.683-31.938-.533-6.575-.936-13.16-1.467-19.739-.862-10.648-1.823-21.29-2.667-31.941a927.185 927.185 0 0 1-1.42-21.121c-.104-1.841-.18-3.647-.784-5.394-.444-6.277-.894-12.552-1.331-18.827-.14-2.046.462-3.585 2.777-3.891 4.01 1.132 7.384 3.312 10.281 6.272z"/><path fill="#FDFDFD" d="M15.751 85.576c-3.428-2.09-6.854-4.18-10.283-6.269-.368-4.317 3.198-4.631 5.721-4.646 8.629-.052 17.322-.999 25.874.918 1.35.303 2.09.026 2.854-1.078.589-.855.979-2.623 2.715-1.335.037.45.074.9.109 1.349.574 1.265 1.879 1.567 2.931 2.18 17.785 10.297 35.583 20.575 53.367 30.87.98.563 1.904 1.224 2.854 1.838-4.689.459-9.385.285-14.071-.002-1.802-.107-3.646-1.001-5.37-.771-7.713 1.018-13.719-4.427-20.911-5.263-1.161-.137-2.054-.926-3.036-1.515-2.823-1.697-5.621-3.106-9.146-3.423-4.751-.422-8.513-3.725-12.561-6.039a288.535 288.535 0 0 0-16.063-8.513c-2.292-1.129-4.133-1.254-4.984 1.699z"/><path fill="#CFCACE" d="M13.041 212.154c3.606 1.556 5.618 5.067 8.806 7.16 1.756 1.153 3.204 2.904 5.633 1.792 1.989.339 1.681 2.043 1.519 3.186-.965 6.695 1.683 11.298 7.486 14.612 2.533 1.445 4.751 3.539 6.992 5.479 10.57 8.187 21.488 15.906 32.133 23.997 1.259.957 2.729 1.727 3.371 3.326.263 4.508-1.72 6.452-6.058 5.845-2.151-.306-4.226-1.024-6.353-1.458-4.372-.897-8.732-1.736-13.232-1.833-4.04-.088-7.843-1.131-11.318-3.463-7.408-4.973-14.933-9.768-21.416-15.964-5.545-3.119-4.871-8.817-5.406-13.803-.791-7.339-1.066-14.733-1.467-22.109-.122-2.274-1.116-4.446-.69-6.767z"/><path fill="#DBD5D6" d="M20.606 254.832c4.733 2.314 8.385 6.166 12.756 9.001 3.911 2.534 7.804 5.106 11.685 7.686 2.302 1.531 5.067 1.725 7.559 1.76 6.687.099 13.069 1.643 19.481 3.182 4.64 1.113 6.242-.161 6.302-5.078 4.065 1.162 7.333 3.741 10.597 6.235 3.385 2.591 6.712 5.207 10.53 7.175 2.209 1.14 3.642 3.303 5.474 4.944 2.556 2.294 5.316 4.195 8.224 6.024 3.125 1.963 7.036 3.337 8.224 7.522.518 4.121-1.238 5.86-5.519 5.289-4.579-.611-8.946-2.216-13.002-4.233-10.381-5.164-21.203-8.902-32.479-11.418-2.823-1.035-5.12-2.925-7.433-4.75-4.382-3.452-9.257-6.153-13.819-9.33-.613-.424-1.266-.444-1.956-.353-3.87-1.284-6.287-4.691-9.712-6.631-2.418-1.987-5.004-3.746-7.562-5.544-2.106-2.031-4.671-3.5-6.837-5.461-.531-.573-1.104-1.125-1.151-1.981-.457-1.344-.91-2.694-1.362-4.039z"/><path fill="#8EA2C6" d="M325.487 166.74c.902-.232 1.799-.463 2.698-.692 1.587 1.76 1.106 3.874.872 5.867-.253 2.156-.466 4.307-.497 6.477-.721 6.381-1.139 12.79-1.629 19.193-1.008 6.663-.848 13.43-1.784 20.099.132 4.279-.862 8.484-.789 12.759-.264 1.744-.666 3.477-.661 5.259-.634 3.64-.569 7.339-.907 11.001-.551 3.396-.875 6.905-4.253 8.964-2.275 1.568-4.399 3.339-6.505 5.133-8.683 6.044-16.547 13.15-25.21 19.22-.371.313-.737.623-1.101.941-17.932 13.694-35.876 27.368-53.759 41.125-13.71 10.542-27.646 20.784-41.351 31.326-1.182.906-2.367 1.811-3.729 2.441-1.822.548-3.333 1.505-4.247 3.246-1.729 1.646-2.915 4.1-5.859 3.916-.884-1.034-.4-2.182-.274-3.306.484-1.55 1.87-2.207 3.047-3.08 8.945-6.631 17.706-13.502 26.47-20.373 18.186-13.753 36.137-27.814 54.342-41.544 2.193-1.655 4.322-3.4 6.49-5.09 14.117-10.737 28.145-21.587 42.276-32.302 9.207-6.979 9.155-6.952 9.896-18.276.91-13.906 2.071-27.794 3.291-41.675.309-3.516.583-7.047.772-10.584.057-5.9.7-11.753 1.392-17.599.106-.904.249-1.806 1.009-2.446z"/><path fill="#768EBA" d="M325.487 166.74c-.466 6.877-.936 13.759-1.403 20.636-2.429 6.284-5.351 12.385-7.294 18.836-2.383 7.903-5.196 15.667-7.558 23.575-.46 1.542-.971 3.672-3.477 2.025-.564-1.055-.556-2.209-.447-3.334.754-7.669.945-15.378 1.525-23.058.757-3.522.721-7.046.016-10.569.258-6.124.438-12.26 1.426-18.321.391-.826.84-1.433 1.688-.395.585.72.188 1.767.902 2.592 2.629-5.165 6.734-9.215 9.573-14.156 1.531-2.667 3.162-5.254 4.195-8.174.362-1.021.59-2.312 2.198-2.052-.452 4.131-.896 8.264-1.344 12.395z"/><path fill="#6D83B3" d="M326.829 154.346c-1.978.981-1.457 3.192-2.274 4.764-2.907 5.587-6.393 10.778-10.315 15.662-1.5 1.867-1.924 4.413-4.007 6.056-1.344-1.606.188-3.71-1.136-5.137-.626-.411-.99-1.058-.927-1.735.821-8.923.898-17.901 2.188-26.787.065-.456.421-.794.809-1.057 1.03 1.01.194 2.452.971 3.933 3.973-3.718 5.821-8.525 7.75-13.175 2.789-6.728 5.173-13.621 7.757-20.432.399-1.054.766-2.186 1.95-2.694.025 8.686-1.157 17.276-1.961 25.897-.458 4.882-.549 9.801-.805 14.705z"/><path fill="#FEFEFD" d="M266.674 74.946c-.416 1.065-1.391 1.268-2.156 1.694-31.924 17.95-63.867 35.873-95.775 53.85-1.539.866-2.657 1.112-4.336.149-31.666-18.173-63.382-36.271-95.086-54.38-.474-.272-.902-.617-1.801-1.232 1.219-.576 2.077-.989 2.938-1.388 31.358-14.49 62.718-28.969 94.064-43.484 1.494-.689 2.74-1.15 4.473-.351 32.283 14.932 64.604 29.784 96.916 44.66.27.127.507.318.763.482z"/><path fill="#FDFDFD" d="M263.531 113.74c-3.094 3.516-7.485 5.094-11.313 7.492-15.388 9.641-30.852 19.313-47.396 26.733-10.767 4.825-21.954 9.519-34.363 9.249-3.906-.083-7.059-1.864-10.375-3.157-6.265-2.439-12.399-5.314-18.336-8.483-5.898-3.146-9.123-8.859-11.973-14.61-1.249-2.525-3.697-4.434-3.882-7.492 2.214.349 3.86 1.854 5.708 2.907 10.715 6.104 21.422 12.231 32.026 18.521 2.825 1.676 5.12 1.619 7.911-.054 10.554-6.326 21.208-12.477 31.838-18.662.666-.388 1.459-.556 2.191-.825.322-.148.845-.201.884.102.457 3.558 3.224 3.492 5.835 3.973 13.053 2.417 24.625-1.639 35.646-8.049 3.956-2.297 7.929-4.563 11.854-6.906 1.128-.671 2.259-1.739 3.745-.739z"/><path fill="#EAF4F8" d="M263.531 113.74c-5.193 2.096-9.739 5.373-14.567 8.125-9.834 5.603-19.968 10.013-31.648 9.077-2.489-.199-4.963-.612-7.449-.759-3.114-.188-4.293-1.94-4.293-4.824 13.312-7.777 26.611-15.577 39.941-23.317 5.727-3.327 11.522-6.539 17.284-9.807-1.147 2.729-4.158 2.995-6.138 4.631-2.046 1.697-6.061 2.693-5.438 5.403.573 2.491 4.363.944 6.71 1.104 8.104.566 16.135-.663 24.185-1.332-5.515 3.33-11.022 6.673-16.55 9.988-.782.471-1.668.772-2.037 1.711z"/><path fill="#D2E2ED" d="M282.618 69.814c.752-.261 1.505-.526 2.258-.787-.285 1.273 3.577.272 1.41 2.577-1.297-.441-2.618-.843-3.668-1.79z"/><path fill="#EAF4F8" d="M267.606 89.449c-.838 1.67-1.801 3.123-4.054 2.334l4.054-2.334z"/><path fill="#EEE7DD" d="M165.115 287.874l.015 62.616c.867.899 1.01 2.062.893 3.184-.307 2.993 1.026 4.729 3.867 5.45.427.376.624.864.702 1.411.029 1.57-.714 2.902-2.242 2.847-3.616-.141-7.543.595-10.393-2.651-5.179-4.563-10.991-8.352-16.081-13.024-1.14-1.051-2.702-1.799-2.49-3.741 1.135-1.753 3.692-.954 4.826-2.711 2.596-7.223 6.906-13.646 9.482-20.896 1.339-3.771 2.036-7.305 1.405-11.347-1.252-8.028-1.462-16.16-1.547-24.29-.059-5.496-1.103-10.924-1.405-16.412-.567-10.193-2.71-20.188-4.022-30.285-.811-6.24-.61-12.625-1.969-18.766-2.033-9.19-.916-18.444-1.239-27.668-.068-1.886-.243-3.624-1.726-5.021-.941-.89-1.397-2.124-1.547-3.383-.854-7.059-2.347-14.005-3.596-20.994-.1-.566-.062-1.14.233-1.666 2.991.815 5.442 2.691 7.996 4.289 3.447 2.163 6.862 4.35 10.559 6.061 1.795 1.223 3.909 1.944 5.521 3.46 1.744 1.72 2.126 3.796 2.111 6.213-.092 13.751-.031 27.501-.025 41.251.577 2.689.634 5.457.609 8.155-.116 12.82.683 25.639.364 38.455-.156 6.493-.408 12.974-.301 19.463z"/><path fill="#495C8F" d="M281.424 108.92c1.197 1.983-.23 3.165-1.348 4.458-8.146 9.435-18.536 16.056-28.688 23.005-9.314 6.373-18.566 12.827-24.001 23.292-2.298 4.425-6.139 7.569-10.28 10.27-.9.588-1.768 1.088-1.739 2.319-.017 1.868-1.655 2.318-2.827 3.063-5.311 3.394-10.582 6.859-16.04 9.992-3.442 1.977-6.26 4.115-6.383 8.459-4.816 4.063-10.663 6.274-16.212 9.017-1.03.513-2.185.663-3.164-.278-.042-7.792-.086-15.583-.122-23.372-.013-2.561.965-4.188 3.396-5.624 12.288-7.258 24.387-14.844 36.585-22.255 12.333-7.492 24.707-14.922 37.072-22.358 10.721-6.448 21.459-12.868 32.2-19.291.483-.292 1.032-.468 1.551-.697z"/><path fill="#E6DED8" d="M138.284 160.527c2.248 6.851 3.053 13.984 4.097 21.066.27 1.831.403 3.556 2.021 4.867 1.211.981 1.49 2.488 1.472 4.058-.044 3.553.209 7.126-.056 10.662-.701 9.319 2.049 18.294 2.53 27.456.425 8.123 1.75 16.079 3.085 24.032 1.679 10.005 1.641 20.162 3.211 30.176.404 2.579.063 5.372.104 8.074.108 7.312.536 14.573 2.005 21.755.241 1.177-.088 2.238-.455 3.348-2.266 6.815-5.046 13.434-8.683 19.599-1.271 2.154-.857 5.025-3.14 6.608-1.461-1.665-1.313-3.741-.81-5.53 1.403-4.947 1.305-9.909.813-14.925-.06-.569.025-1.139.187-1.688.521-1.032.893-2.085.896-3.274.007-8.938.042-17.877-.025-26.816-.004-.696-.186-1.356-.393-2.017-.703-3.894.313-7.897-.714-11.774-.394-2.037-.295-4.104-.295-6.164-.01-24.513-.108-49.027.077-73.538.037-4.893-1.389-8.106-5.738-10.642-6.22-3.619-12.491-7.222-18.197-11.663-3.029-3.253-5.044-7.07-6.115-11.376-1.59-6.366-5.903-11.073-9.875-15.916-3.322-4.048-6.406-8.382-10.923-11.354-1.182-.779-2.861-1.809-1.894-3.865 14.917 9.048 29.832 18.102 44.756 27.139.777.469 1.684.757 2.059 1.702z"/><path fill="#526596" d="M170.74 202.517c1.153.071 2.243-.095 3.294-.653 5.271-2.786 10.56-5.535 15.84-8.297 1.249 1.179.977 2.742.979 4.188.025 16.219.015 32.437.021 48.65.002 2.978-.916 5.858-.813 8.839-.287 1.582-.902 3.067-1.479 4.554-1.56 4.015-3.759 5.123-8.05 4.149-.67-.151-1.348-.415-2.025-.292-4.583.825-6.533-2.186-8.216-5.601.042-14.075-.104-28.137-.594-42.195-.119-3.48-.147-7.093.81-10.557.077-.927.154-1.857.233-2.785z"/><path fill="#CBC6D0" d="M27.427 115.267c2.346-.794 2.509-2.105 1.803-4.464-1.953-6.535-3.477-13.196-5.17-19.81 8.21 4.533 16.167 9.489 24.055 14.557 8.167 12.48 20.166 21.081 31.192 30.644 4.197 3.646 8.099 7.42 10.336 12.623.873 2.025 2.211 3.717 3.758 5.285.828.84 2.077 1.599 1.507 3.156-1.527.72-2.635-.271-3.765-.98-20.038-12.557-40.099-25.078-60.154-37.608-1.376-.863-3.211-1.403-3.562-3.403z"/><path fill="#D7D2D1" d="M94.835 157.316c-5.524-5.223-7.321-13.146-13.276-18.099-7.366-6.124-14.887-12.117-21.755-18.771-4.503-4.358-9.824-8.357-11.69-14.9 11.829 7.104 23.655 14.203 35.475 21.313 2.639 1.588 5.256 3.213 7.88 4.821.054 1.44 1.086 2.336 2.08 2.988 7.397 4.866 11.563 12.683 17.327 19.028 1.824 2.008 2.709 4.99 3.648 7.656 1.467 4.177 2.746 8.402 5.776 11.797-1.235.566-2.217-.123-3.16-.722-6.809-4.324-13.704-8.504-20.502-12.845-.854-.544-1.819-1.023-1.803-2.266z"/><path fill="#7E91B4" d="M169.954 360.779a200.68 200.68 0 0 0-.138-1.356c-1.395-2.758-1.407-5.505.047-8.244.042-8.214.078-16.434.122-24.651.419-.292.766-.221 1.044.211 1.356 5.114.373 10.317.612 15.475.013 4.392.681 5.18 4.979 4.427 8.371-1.468 16.451-3.876 23.896-8.155 1.78-1.025 3.462-2.822 5.914-1.745-5.089 4.895-11.188 8.524-16.519 13.103-4.219 3.624-9.183 6.284-13.091 10.286-1.11 1.811-2.719 2.865-4.815 3.183-1.581-.123-1.542-1.552-2.051-2.534z"/><path fill="#FDFDFD" d="M170.508 326.213a4.42 4.42 0 0 0-.524.313c-.015-29.742.217-59.488-.229-89.224-.103-6.882-.212-13.854-.963-20.786-.393-3.624-.411-7.719 1.715-11.213.021 16.394.042 32.79.07 49.185.003 1.487.075 2.976.11 4.465.943 1.129 1.045 2.498 1.042 3.874-.021 13.782.152 27.563-.078 41.343.063 6.568.217 13.141-.083 19.71-.052.913-.248 1.762-1.06 2.333zM165.115 287.874c-1.019-.905-.662-2.13-.665-3.229-.015-20.948-.004-41.899-.002-62.846 1.176 2.523 1.298 5.363 1.247 7.941-.269 12.585 1.467 25.148.677 37.694-.433 6.81.053 13.69-1.257 20.44zM169.864 351.177l-.047 8.244c-4.229-.085-4.678-.541-4.697-4.807-.008-1.374.004-2.75.01-4.126 1.554.384 3.09.909 4.734.689zM162.36 174.337c-2.033-.847-4.071-1.683-5.517-3.459 2.183.605 4.326 1.27 5.517 3.459z"/><path fill="#27334E" d="M308.991 115.15c.916-.422 1.833-.849 2.749-1.269.916 1.082.673 2.397.637 3.626-.258 8.223-1.107 16.409-1.642 24.613-.556 8.549-1.188 17.092-1.771 25.637-.522 7.638-.946 15.292-1.684 22.899-.414 4.223-.179 8.428-.444 12.637-.571 9.111-1.919 18.194-1.591 27.354 1.007 3.415-2.043 3.904-3.825 5.311a18416.134 18416.134 0 0 1-80.135 59.354c-8.906 6.729-17.951 13.263-26.896 19.934-1.197.891-2.302 2.397-4.175 1.313a3.286 3.286 0 0 1-.457-1.08c-.317-10.267-.054-20.527-.149-30.789.103-30.558 1.063-61.113.6-91.678-.047-3.147 1.164-4.978 3.848-6.585 7.833-4.688 15.496-9.655 23.264-14.452.884-.545 1.72-1.123 2.778-1.252 16.878-10.491 33.768-20.974 50.644-31.475a19592.433 19592.433 0 0 0 35.177-21.961c1.055-.659 2.049-1.423 3.072-2.137z"/><path fill="#6B7997" d="M220.096 170.724c-8.436 5.292-16.783 10.719-25.344 15.799-3.088 1.833-4.146 4.049-4.138 7.513.064 28.651-.007 57.303-.042 85.952-.002 1.491-.054 2.978-.083 4.469-.582 3.253-.091 6.535-.269 9.799-.693 3.969-.3 7.971-.275 11.956.012 2.325-.548 4.101-2.314 5.73-4.28 3.942-8.505 7.941-13.312 11.248-1.092.752-2.188 1.753-3.734 1.16.023-6.658.047-13.314.069-19.973 2.954-2 6.417-2.938 9.55-4.592 5.253-2.775 8.216-6.358 8.213-12.907-.002-7.525-.371-15.051-.217-22.573.056-2.747.279-5.448 1.004-8.1 1.34-20.865.438-41.759.67-62.639-.474-3.575.84-5.796 4.146-7.707 7.298-4.219 14.253-9.03 21.347-13.597 1.797.163 2.623-2.639 4.729-1.538z"/><path fill="#25272B" d="M304.783 231.433c-.924-.81-.696-1.914-.625-2.9.625-8.979 1.378-17.947 1.921-26.928.233-3.873.472-7.74.752-11.609.852-11.599 1.286-23.23 2.194-34.823 1.077-13.755 2.452-27.485 2.715-41.292 2.191.104 1.391 1.808 1.327 2.824-.558 8.665-1.229 17.322-1.847 25.985-.081 1.135-.039 2.282-.055 3.422l-2.067 29.579c-.463 6.436-.922 12.874-1.384 19.309.635 2.838-.179 5.651-.146 8.479-.735 7.915-1.135 15.851-1.698 23.778-.106 1.464.01 2.971-1.087 4.176z"/><path fill="#27334E" d="M94.835 157.316c8.365 5.471 16.785 10.859 25.463 15.835 7.054 4.469 14.046 9.045 21.194 13.357 2.595 1.561 3.542 3.441 3.538 6.411-.025 26.493.066 52.989.132 79.482.002 1.257.07 2.52.108 3.778.666 12.979.644 25.973.541 38.963-.025 2.911-1.33 3.486-3.997 1.618-5.796-4.059-11.375-8.416-17.03-12.658-26.489-20.416-53.91-39.594-80.598-59.756-4.617-3.07-8.778-6.777-13.483-9.713-1.721-1.072-1.519-2.584-1.487-4.165.128-10.305-1.146-20.518-1.866-30.762-.256-3.645-.343-7.292-.715-10.941-.813-7.945-.665-15.958-1.208-23.926a8116.747 8116.747 0 0 0-2.532-35.886c-.287-3.987-.468-7.979-.879-11.962-.135-1.323-.318-2.768.656-3.962 1.956-.047 3.013 1.828 4.757 2.234l67.406 42.053z"/><path fill="#2E2F31" d="M22.669 113.032c.141 10.135 1.182 20.206 1.992 30.296.643 7.938.895 15.908 1.462 23.854.817 11.448 1.746 22.885 2.677 34.327.259 3.183.198 6.377.357 9.558.338 6.777 2.027 13.544.597 20.373-1.127-.88-1.182-2.173-1.219-3.411-.277-9.78-1.116-19.529-1.782-29.292-.553-8.146-1.511-16.27-1.67-24.444-.013-.68-.086-1.373.241-2.019-.768-11.228-1.521-22.456-2.313-33.683-.538-7.615-1.175-15.229-1.655-22.85-.06-.956-.999-2.736 1.313-2.709z"/><path fill="#DDDCDE" d="M25.325 172.273c.217 15.313 2.698 30.472 3.09 45.794.111 4.376-.377 9.056 1.34 13.373-.323 1.596.854 2.075 1.898 2.832 4.349 3.135 8.617 6.387 12.912 9.594.477 1.313.381 2.072-1.278 1.33-4.332-3.311-8.636-6.661-13.008-9.916-2.295-1.706-1.7-4.246-2.088-6.494-.44-2.533.708-5.225-.712-7.68-.366-13.521-1.606-26.98-2.645-40.457-.209-2.754-.78-5.654.491-8.376z"/><path fill="#E8E7E8" d="M43.289 245.197c1.199.299.852-.888 1.277-1.33 15.114 11.088 30.265 22.14 45.339 33.279 11.583 8.557 23.08 17.229 34.615 25.851.27.845.663 1.791-.45 2.262-.864.366-1.469-.29-1.829-.994-.409-.793-1.299-.76-1.854-1.264-.026-2.747-2.816-3.07-4.269-4.271-3.827-3.153-8.356-5.278-12.097-8.812-1.883-1.776-3.2-5.561-7.029-4.965-.952-2.826-5.024-1.783-5.996-4.947-.295-.962-2.229-1.928-3.267-2.543-3.208-1.9-6.285-3.972-9.347-6.082a71043.841 71043.841 0 0 0-35.093-26.184z"/><path fill="#E2DCDB" d="M120.389 302.997c.783.301 2.08-1.297 2.393.582.125.762.318 1.484 1.102 1.188.381-.146.436-1.151.639-1.772 6.723 4.853 13.448 9.702 20.75 14.972V276.18c1.254 3.846.241 7.81.592 11.702.72 8.206.15 16.433.308 24.646.05 2.604.324 5.261-1.007 7.694.812 5.426 1.413 10.794-.536 16.195-.623 1.732-.132 3.858-.153 5.808-.886 2.375-3.573.535-4.822 2.066-1.461 1.003-2.386-.222-3.282-.935-14.674-11.661-30.038-22.405-44.854-33.88-6.231-4.824-12.729-9.309-18.959-14.142-1.101-.855-2.713-1.438-2.408-3.345 4.188 1.036 8.248 2.462 12.588 3.043 3.562.479 6.94 1.897 10.191 3.758 6.96 3.981 14.505 6.686 22.249 8.756 1.745.465 3.642.808 5.151-.76 1.187-1.223.712-2.513.058-3.789z"/><path fill="#DBE0E8" d="M70.15 291.995c4.57 4.656 10.124 8.079 15.277 11.99 16.51 12.538 33.374 24.609 49.698 37.4 1.383 1.087 2.568 2.653 4.529 2.907 4.881 5.283 10.842 9.276 16.449 13.692.811.64 1.678 1.169 2.146 2.131-1.495 1.229-3.025.109-4.542.075-2.388-.71-4.053-2.508-5.962-3.948-22.183-16.751-44.221-33.694-66.292-50.595-2.452-1.874-4.776-3.921-7.367-5.616-8.056-6.691-16.784-12.515-24.878-19.169-.613-.854-1.99-1.196-1.788-2.61 1.152-2.37 1.914-.141 2.705.298 7.073 3.89 13.139 9.277 20.025 13.445z"/><path fill="#7689B6" d="M206.431 336.734c-1.651.155-3.062 1.015-4.361 1.873-7.449 4.934-15.991 6.826-24.446 8.968-.65.167-1.355.141-2.037.159-4.903.131-5.007.03-4.887-4.848.637-.612 1.428-.641 2.243-.62 4.995.104 9.368-1.82 13.606-4.185 7.505-4.184 14.313-9.404 21.426-14.171 11.927-7.988 22.438-17.69 33.317-26.937 7.951-6.757 13.38-15.565 18.119-24.782.613-1.185.714-2.388.413-3.656.311-1.516 1.625-2.16 2.693-2.963 10.422-7.846 21.016-15.461 31.46-23.273.998-.746 1.978-1.591 3.334-1.641 2.779 1.021 2.017 2.989 1.083 4.743-2.364 4.439-4.529 9.026-7.628 13.009-5.347 6.875-10.063 14.181-14.839 21.438-2.596 3.943-5.651 7.439-8.953 10.76-14.829 11.326-29.652 22.656-44.489 33.97-5.336 4.076-10.704 8.106-16.054 12.156z"/><path fill="#7E95BE" d="M266.973 290.611c3.318-4.579 6.938-8.976 9.902-13.777 6.639-10.764 15.292-20.205 20.767-31.725.67-1.414 1.852-2.892-.383-4.037-.072-1.815 1.543-2.297 2.602-3.137 2.262-1.798 4.742-3.341 6.363-5.831 1.664-.066 1.76-1.29 2.158-2.554 3.114-9.85 6.229-19.699 9.59-29.463 1.249-3.635 3.246-7.011 4.019-10.836.233-1.156.892-1.809 2.089-1.877-1.136 12.918-2.316 25.832-3.386 38.751-.572 6.926-1.127 13.856-1.35 20.795-.141 4.236-3.092 6.201-5.839 8.309-15.468 11.849-31.014 23.601-46.532 35.382z"/><path fill="#92A3C1" d="M176.836 362.936l-1.348 1.453c-1.127 1.913-2.685 3.102-5.012 3.02a1.25 1.25 0 0 1-.732-.556c-.04-1.751.976-2.912 2.211-3.947 1.622-.929 3.247-1.854 4.867-2.782.695.934-.334 1.876.014 2.812z"/><path fill="#7E91B4" d="M186.621 355.394c-1.226 1.36-2.437 2.745-4.313 3.236.548-2.265 2.217-3.038 4.313-3.236z"/><path fill="#929DB2" d="M306.224 232.107c-.377 3.416-3.455 4.414-5.603 6.243-1.099.935-2.241 1.816-3.363 2.724-12.392 9.17-24.786 18.34-37.179 27.512-.177 1.148-1.083 1.692-1.911 2.287-16.878 12.117-33.334 24.807-50.188 36.95-1.1.788-2.256 2.589-3.953.736 1.063-2.819 4.027-3.485 6.068-5.155 3.589-2.932 7.349-5.683 11.167-8.33 25.825-19.088 51.601-38.246 77.477-57.269.799-.587 1.843-1.03 2.015-2.217.9-1.821 4.391-1.119 4.032-4.157.745-9.396 1.49-18.789 2.23-28.183 1.445.318.88 1.208.574 2.026-.454 8.944-.91 17.888-1.366 26.833z"/><path fill="#7E95BE" d="M307.59 205.277c-.045-.719.122-1.494-.574-2.026.232-2.754.466-5.502.697-8.251.862 3.434 1.043 6.864-.123 10.277z"/><path fill="#293550" d="M188.279 58.615l5.12-6.52c-.127-.189-.261-.373-.393-.563-17.173 7.021-34.347 14.04-51.52 21.059-.133-.189-.271-.378-.404-.567 4.402-4.39 8.809-8.779 13.205-13.176 5.049-5.052 5.046-5.055-1.599-8.102-2.982-1.368-5.961-2.743-9.659-4.449 5.833-2.734 11.277-4.788 16.195-7.728 5.471-3.266 10.045-2.899 15.793-.123 25.021 12.078 50.316 23.59 75.514 35.312.808.375 1.616.763 2.39 1.133-.103 1.203-1.073 1.292-1.697 1.637-16.394 9.13-32.82 18.197-49.194 27.367-1.812 1.014-3.26 1.112-5.059.095-3.585-2.025-7.271-3.87-10.912-5.793-4.291-2.269-4.28-2.257-1.345-5.902 8.479-10.532 16.947-21.073 25.96-32.278l-13.127 4.912c-.317.146-.752.246-.938-.013-2.12-2.976-5.233-4.624-8.33-6.301z"/><path fill="#2B3753" d="M181.819 103.33l10.749 5.654c-5.653 3.162-10.75 6.053-15.889 8.874-3.394 1.865-6.833 5.019-10.268 5.037-3.288.021-6.602-3.243-9.886-5.096-23.923-13.501-47.841-27.006-71.76-40.508-.991-.563-1.972-1.146-2.939-1.705.047-1.358 1.239-1.323 1.951-1.659 16.67-7.819 33.374-15.568 50.035-23.404 1.803-.849 3.344-1.023 5.166-.1 2.443 1.235 4.963 2.377 7.543 3.284 2.61.921 3.164 1.645.856 3.864-9.674 9.299-19.158 18.79-28.734 28.189-.896.881-1.931 1.624-2.498 2.963 6.917-2.685 13.832-5.366 20.748-8.052 2.441.825 2.427 2.973 2.217 4.837-.478 4.138 1.554 6.291 5.075 7.859 8.872 3.958 17.632 8.161 26.473 12.189 1.94.884 3.635.867 5.561-.029 1.808-.837 3.34-2.484 5.6-2.197z"/><path fill="#32415F" d="M181.819 103.33c-.564.385-1.13.762-1.692 1.148-4.023 2.776-7.738 3.417-12.517.73-7.115-4-14.827-6.936-22.281-10.332-.934-.428-1.833-.93-2.768-1.351-3.061-1.373-5.009-3.306-4.332-7.081.358-1.997.253-4.114-1.334-5.771 12.17-5.12 24.342-10.237 36.514-15.357.157.211.318.417.473.627l-19.406 22.604c.086.163.177.327.269.492l35.462-14.629c.141.166.28.332.419.494-2.793 3.502-5.584 7.007-8.382 10.507-2.861 3.574-5.681 7.182-8.614 10.695-1.083 1.301-1.063 1.942.533 2.767 2.619 1.35 5.111 2.96 7.656 4.457z"/><path fill="#32415E" d="M188.279 58.615c4.646-.174 6.74 3.391 9.275 6.314l-21.616 9.188c-.187-.242-.369-.482-.556-.727 4.297-4.923 8.596-9.852 12.897-14.775z"/><path fill="#CBD7DF" d="M171.952 362.907c-.078 1.638-1.563 2.57-2.008 4.021-.28 1.053-1.11 1.346-2.043 1.481-3.948.577-12.788-4.938-14.42-8.992l4.766.703c2.676 3.09 6.573 1.786 9.863 2.658 1.133.3 1.738-.849 1.842-1.997.795.587.919 1.806 2 2.126z"/><path fill="#EEE7DD" d="M145.163 320.223c-.613-.271-2.447-.41-.967-1.257 1.938-1.112 1.646-2.532 1.653-4.041.028-9.015.015-18.025.015-27.04.955.78.661 1.873.662 2.86.022 8.646.015 17.295.017 25.943.001 1.356.205 2.796-1.38 3.535z"/><path fill="#5E7195" d="M189.202 256.204c.319 7.297-.049 14.591.448 21.913.308 4.542-.271 9.313-.501 13.979-.122 2.396-1.954 3.875-3.611 5.224-4.362 3.56-9.229 6.181-14.887 7.058.01-15.144.022-30.285.035-45.427.113.016.292-.011.326.05 2.499 4.265 7.172 3.325 10.936 4.49 2.613.81 4.268-.771 5.427-2.966.738-1.386.677-3.11 1.827-4.321z"/><path fill="#6D82A9" d="M204.348 308.492c1.389.722 2.008-.521 2.85-1.139 17.631-12.918 35.253-25.846 52.881-38.77 1.735.749 1.151 1.882.562 3.086-6.121 12.44-14.319 23.19-25.393 31.686-7.307 5.606-13.661 12.404-21.471 17.384-7.667 4.89-14.282 11.312-22.542 15.354-2.337 1.144-4.438 2.771-6.739 4.001-4.301 2.298-8.855 3.56-13.797 2.791l-.186-16.672.071-1.863c6.94-3.678 12.235-9.383 17.954-14.57 1.027-.932.553-2.131.662-3.223.388-3.921-.786-7.937.687-11.795.766 6.092.112 12.21.36 18.311.049 1.207-.425 2.499.417 3.622l-.085.072c2.439.451 3.533-1.733 5.09-2.814 2.311-1.604 4.755-3.075 6.812-5.056.462-.445 1.14-.751 1.867-.405z"/><path fill="#32405D" d="M284.195 199.27c-1.948 3.407-2.004 7.162-2.089 10.931-.123 5.326-.958 10.42-4.585 14.701-1.87 2.208-4.141 3.919-6.473 5.48-6.251 4.187-11.853 9.285-18.413 13.02-2.333 1.328-4.859 1.703-7.561 1.857-6.324.369-12.173 2.791-18.104 4.797-3.661 1.236-7.162 3.057-11.222 2.736-1.166-.094-2.271-.202-3.282-.811 3.314-6.371 1.431-13.389 2.695-20.011-.148-.48-.857-.141-.405-.199.163-.022.226.073.189.286-.813 4.714-1.302 9.455-1.389 14.244-.026 1.37.386 3.063-1.517 3.735-2.103-.02-2.743-2.317-4.496-2.879-.6-.789-.66-1.709-.475-2.608 1.145-5.567 1.876-11.217 3.466-16.689a4.31 4.31 0 0 1 2.821-1.242c.855.302 1.732.604 2.19-.565.455-1.168.168-2.142-.87-2.871.813-4.896 4.051-8.439 7.307-11.663 10.716-10.604 21.407-21.28 32.729-31.219 6.293-5.521 13.82-9.627 20.794-14.371.939-.643 1.855-1.323 2.826-1.902 1.363-.816 2.709-1.642 4.433-.758 1.817.938 2.181 2.427 2.124 4.287-.086 2.744-.034 5.493-.016 8.243.007 1.102-.285 2.407 1.396 2.647.347 1.027-.268 1.789-.804 2.493-2.943 3.857-3.162 8.481-3.77 13.007-.303 2.326 1.031 3.852 2.501 5.324z"/><path fill="#FBFBFA" d="M210.535 227.86c.547 4.232-1.092 8.173-1.65 12.254-.324 2.365-.887 4.697-1.341 7.046-.556 2.413-1.332 4.802-1.608 7.244-.311 2.765-1.818 4.235-4.678 5.39-.793-7.488-1.615-14.738-2.301-22.001-.191-2.031 1.768-2.304 3.199-3.424.543 5.927 1.053 11.478 1.56 17.026.182.025.361.053.546.077 1.15-6.173 2.437-12.322 3.38-18.525.337-2.212 1.039-3.893 2.893-5.087z"/><path fill="#FCFCFB" d="M284.195 199.27c-4.068-.06-3.538-3.211-3.376-5.583.384-5.54 1.602-10.892 5.455-15.24 3.705-2.11 4.875-1.519 4.865 2.795-.021 6.858-.634 13.561-6.944 18.028z"/><path fill="#C4CCD7" d="M300.753 235.589c.481 1.172.475 1.16-.727 2.047-9.918 7.29-19.838 14.577-29.749 21.877-16.247 11.969-32.486 23.94-48.73 35.914-.706.29-.829-.022-.658-.64 19.623-14.59 39.247-29.188 58.884-43.766 6.971-5.174 13.985-10.289 20.98-15.432z"/><path fill="#FAFAFA" d="M296.39 184.767c-1.872 2.732-.723 6.596-4.456 8.29-.224-2.245.691-4.102 1.398-5.854 1.559-3.872 2.088-7.639.127-11.475-.931-1.822.416-2.487 1.561-3.192 2.002-1.233 1.145 1.369 2.368 1.643 1.348-1.744.527-5.099 3.712-5.806.606 1.077-.215 2.123-.596 2.993-1.916 4.391-2.506 8.729-.201 13.146 1.313 2.517-.778 3.101-2.507 4.268-.466-1.338-.893-2.555-1.406-4.013z"/><path fill="#F9FAF9" d="M212.04 250.037c.413-5.121.93-10.24 1.189-15.369.097-1.859.681-3.014 2.954-3.757-.403 6.3-.758 12.375-1.198 18.445-.105 1.461-1.663 1.762-2.522 2.624l-.423-1.943z"/><path fill="#AFB9C4" d="M220.89 294.788c.22.215.439.424.658.64l-17.2 13.063c-3.65 2.633-7.308 5.261-10.953 7.909-.891.646-1.679 1.757-2.816.367 8.798-6.433 17.597-12.871 26.401-19.293 1.278-.933 2.605-1.792 3.91-2.686z"/><path fill="#5E7195" d="M190.664 316.696c-1.224-.805-.747-2.06-.754-3.128-.045-6.267-.022-12.537-.023-18.805.349-3.427-.686-6.938.603-10.31.058 10.749.115 21.496.174 32.243z"/><path fill="#E8E9EC" d="M214.677 223.18c.611-.149 1.437-1.053 1.763-.419.742 1.443.427 3.034-.38 4.454-.383.677-.875 1.472-1.738 1.34-1.028-.157-.624-1.288-.966-1.936l1.321-3.439z"/><path fill="#33415E" d="M43.763 171.684c2.17-3.083-.163-6.099-.212-9.147-.025-1.583-.528-3.187.13-4.71 2.658-6.158 5.25-6.667 12.114-2.437 8.384 5.168 16.222 11.396 23.498 18.147 5.991 5.557 10.655 12.196 14.277 19.502 3.454 6.974 7.479 13.604 11.527 20.232.539.886.951 1.831.849 2.918.047 6.267 1.273 12.428 1.702 18.665.062.912.246 1.934.931 2.521 3.592 3.08 6.984 6.498 11.782 7.763 1.902 1.824 1.127 4.298 1.593 6.477.761 3.564 1.7 7.094 2.386 10.668.563 2.94.452 5.736-2.75 7.374-3.237 1.661-6.877 1.438-9.127-1.149-3.215-3.693-6.483-7.382-8.696-11.83-2.245-4.515-4.354-9.11-6.809-13.509-4.372-7.838-10.204-14.425-18.345-18.435-5.359-2.639-11.044-4.165-16.36.465-1.354 1.179-2.469.202-3.297-.614-1.037-1.024-1.965-2.273-2.582-3.594-3.552-7.621-5.453-15.685-6.155-24.043 2.603.324 5.312.852 5.711-3.014.5-.757.493-2.12 1.992-1.701 1.382 3.062.58 6.543 2.052 10.103-.332-3.029-.486-5.586-.339-8.155.197-.957.273-2.311 1.535-2.146 1.854.244 1.136 2.043 1.462 3.202 2.531 5.67 4.462 11.67 8.954 16.255.687.608 1.403 1.175 2.194 1.642.869.675 1.886.802 2.943.779 3.529 1.784 6.709 4.143 10.125 6.115.978.817 1.457 1.956 1.95 3.073.56 1.264 1.385 2.003 2.863 1.632.491-.022.958.066 1.381.326 2.663 3.898 6.154 6.796 10.918 9.327-.838-2.703-2.631-3.442-4.1-4.361-4.723-2.951-7.858-6.924-8.778-12.522-.226-1.394-.342-2.718.17-4.053.934-2.443 2.232-2.933 4.521-1.63.993.569 1.823 1.397 2.81 1.979.854.504 1.541 1.408 3.226 1.2-2.667-2.792-5.651-4.575-8.608-6.354-1.104-.663-2.204.224-3.294.5-1.704.13-2.354-1.153-3.101-2.311a54.676 54.676 0 0 1-4.507-8.501c-4.045-9.642-9.693-18.171-17.213-25.466-2.385-2.312-4.199-5.153-6.709-7.368-.773-.684-1.479-1.453-2.403-1.937-1.046-.543-2.178-.956-3.265-.269-1.181.747-.99 2.015-.754 3.123.958 4.492 2.336 8.871 3.894 13.184.699 1.942 1.418 3.861 1.85 5.883.223 1.056.299 2.114-.026 3.164-.212.515-.538.904-1.125.996-1.443-.472-1.545-1.824-1.913-2.983-1.581-4.997-4.046-9.338-8.713-12.137-1.052-.633-2.145-1.364-2.159-2.839z"/><path fill="#FCFCFB" d="M56.548 194.234c-1.297 4.711-2.013 5.019-6.328 2.712-5.118-3.796-10.382-7.438-12.141-14.151-.782-2.98-1.735-5.932-1.372-9.041.497-4.211 2.394-5.005 5.861-2.623.357.241.794.371 1.192.556 3.84 3.35 8.533 5.902 10.304 11.168.743 2.209 1.545 4.398 2.322 6.596 1.448 1.545.11 3.188.162 4.783z"/><path fill="#FBFBFB" d="M132.353 247.597c-3.347-2.396-6.41-4.589-9.991-7.155.704 3.637 2.101 6.198 4.604 8.106a146.66 146.66 0 0 0 6.967 5.024c1.149.776 1.593 1.622.861 2.828-.968 1.591-1.705.102-2.427-.307-7.473-4.213-11.904-10.523-13.018-19.08-.12-.908-.273-1.829-.223-2.731.108-1.935.108-4.061 2.159-5.083 1.916-.955 3.193.677 4.563 1.6 2.088 1.409 4.051 3.007 6.162 4.377 1.263.818 1.344 1.789.675 2.861-1.018 1.627-1.732-.041-2.4-.438-1.472-.871-2.788-1.999-4.208-2.964-1.183-.802-2.429-2.204-3.808-.404-1.397 1.834.238 2.604 1.431 3.47 2.691 1.95 5.394 3.883 8.065 5.857 1.815 1.346 1.798 1.372.588 4.039z"/><path fill="#FAFAFA" d="M120.363 245.137c-.597.697-.875 1.81-2.253.73-3.063-2.396-6.275-4.612-9.429-6.893-1.323-.957-1.79-2.359-1.946-3.868-.612-5.925-1.146-11.858-1.777-17.782-.095-.916.037-1.296.989-1.136.881.758 1.381 1.599 1.476 2.869.262 3.513 1.145 7.019 1.044 10.506-.129 4.666 1.894 7.469 5.688 9.878 2.299 1.465 5.5 2.346 6.208 5.696z"/><path fill="#404354" d="M153.484 359.416c3.754 2.894 6.974 6.562 11.84 7.823 1.646.421 3.13.532 4.624-.313l.026.318c5.36.471 10.127-1.597 14.728-3.817 12.377-5.98 23.979-13.195 34.44-22.212 1.641-1.411 3.003-3.96 5.948-3.161.285 1.507-.796 2.313-1.707 3.129-12.478 11.091-26.352 20.019-41.646 26.713-4.56 1.998-9.376 2.849-14.357 2.73-4.41-.575-8.355-2.334-12.02-4.776-9.834-6.554-18.855-14.166-27.993-21.621a1089.963 1089.963 0 0 0-50.134-38.485c-1.282-.929-2.745-1.691-3.513-3.207-.298-1.129-.373-2.216.604-3.092 6.063 3.811 11.444 8.541 17.136 12.847 14.113 10.666 28.125 21.471 42.198 32.189 6.581 5.014 13.214 9.96 19.826 14.935z"/><path fill="#E1E3E9" d="M80.483 329.824a3.979 3.979 0 0 1-.008-.673c-.153-1.383.835-1.094 1.554-.975 1.121.191 2.159.684 3.187 1.175.292.182.652.355.778.659 2.717 6.451 8.33 10.01 13.562 14.118 10.09 7.922 19.864 16.249 29.644 24.563 1.862 1.588 4.275 2.239 6.229 3.618 2.024 1.438 4.868 2.429 4.338 5.83-.422.319-.905.411-1.42.38-3.405-.46-6.413-2.214-9.912-3.238-.295 2.582 3.521 4.938.238 7.336-4.312-.81-8.157-2.578-11.429-5.534-.519-2.755-2.032-5.054-3.396-7.424-.448-.775-1.126-1.652-.392-2.516.855-1.003 1.898-.359 2.823.032 1.344.567 2.498 1.478 3.884 2.052-10.48-8.084-19.622-17.695-29.932-25.974-.916-.733-1.896-1.258-3.076-1.373-1.614-.729-2.022-2.46-3.052-3.677-1.615-2.612-3.087-5.293-3.62-8.379z"/><path fill="#C6CBD3" d="M85.283 329.883c-1.729.584-2.979-1.979-4.809-.732-1.18-1.641-1.644-3.558-2.081-5.482-.706-1.424.07-1.804 1.29-1.726.882.058 1.661.516 2.433.926.289.158.556.354.804.566 1.021 1.059 1.564 2.398 2.18 3.699.262.902.734 1.793.183 2.749z"/><path fill="#A8ADBE" d="M82.534 323.654c-1.375.768-2.77-2.984-4.14.016-.46-.926-.916-1.853-1.376-2.773l-.023-1.362c3.812-1.059 5.883.485 5.539 4.119z"/><path fill="#323A53" d="M224.987 338.105c-3.74 1.787-6.5 4.873-9.734 7.335-12.485 9.518-25.444 18.156-40.797 22.506-1.746.493-3.11.334-4.48-.697 2.012-.613 3.794-1.678 5.513-2.859.466 2.001 1.626.974 2.62.587 9.133-3.556 17.409-8.743 25.121-14.587 14.708-11.149 29.037-22.796 43.411-34.374 4.075-3.282 7.048-7.863 11.924-10.241.724-.354.761-1.054.851-1.75.302-2.426 2.592-3.197 4.146-3.218 1.238-.017.447 2.322.631 3.601-4.035 2.177-5.776 6.521-9.068 9.513-8.529 7.758-17.475 14.985-26.327 22.338-1.067.879-2.056 2.247-3.811 1.846z"/><path fill="#434E6D" d="M224.987 338.105c10.237-8.115 20.553-16.139 29.851-25.359 1.875-1.86 4.52-2.877 5.104-6.102.219-1.219 2.317-2.418 4.251-2.235-.229 1.597.662 3.337-.621 4.796-2.695 1.283-4.079 3.828-5.921 5.974-6.113 7.109-13.195 13.231-20.287 19.317-3.37 2.896-6.563 6.022-10.326 8.448-5.54 3.88-10.397 8.707-16.212 12.16-11.624 6.897-23.313 13.753-36.98 15.972-1.599.26-3.199.378-4.797.157-.833-.113-1.958-.068-1.854-1.461 10.448.361 18.986-4.708 27.735-9.453 9.867-5.354 18.737-12.036 27.295-19.209 1.031-.871 1.846-2.001 2.762-3.005z"/><path fill="#566284" d="M227.057 342.238c7.49-6.666 15.385-12.858 22.506-19.964 3.538-3.53 7.387-6.66 9.813-11.18.771-1.437 2.472-1.972 4.191-1.892-.185 1.854.411 3.817-.789 5.523-1.917 1.25-4.157 2.133-5.057 4.523-9.822 11.269-20.819 21.258-32.5 30.581-11.967 9.547-25.068 16.824-39.659 21.438-1.049.069-2.093.093-3.039-.496-.673-2.098 1.174-2.041 2.248-2.521 6.548-2.968 13.143-5.813 19.493-9.207 6.492-3.468 11.991-8.271 17.702-12.791 1.69-1.343 3.473-2.574 5.091-4.014z"/><path fill="#6A7799" d="M257.334 318.825c.657-2.903 2.572-4.139 5.445-4.098-.177.665-.349 1.335-.526 2.001 1.223 2.963.123 5.464-1.545 7.856-3.521.289-5.435 2.67-7.053 5.438-2.691 1.815-4.718 4.329-6.921 6.655-8.453 7.863-17.11 15.489-26.507 22.242-3.542 2.548-7.42 4.504-11.091 6.825-2.941 1.183-5.833 2.486-8.864 3.426-1.28.396-2.577.978-3.939.248-.794-1.704.759-1.899 1.629-2.213 11.695-4.16 21.063-12.048 30.569-19.541 9.808-7.729 18.584-16.649 26.901-25.981.754-.848 1.254-1.914 1.902-2.858z"/><path fill="#5D697E" d="M231.772 373.862c-5.878 3.337-11.376 7.351-17.675 9.938-.934.383-1.875.75-2.813 1.125-.494 1.062-1.417 1.638-2.405 2.148-7.548 3.067-15.417 4.923-23.445 6.178-1.249.193-2.503.19-3.707-.321-1.2-.835-2.072-1.813-1.444-3.422.965-.902 2.187-1.192 3.445-1.31 5.457-.527 10.775-1.759 16.059-3.157 7.713-2.315 15.155-5.265 22.042-9.498 3.112-1.166 5.378-3.85 8.592-4.849.359-.004.691.081 1.005.252.73.648 1.146 1.36.467 2.293a3.853 3.853 0 0 1-.121.623z"/><path fill="#647490" d="M231.891 373.24c-.231-.703-.465-1.402-.698-2.108-.409-.928.132-1.65.768-2.028 4.033-2.393 4.279-6.324 4.356-10.353.72-2.245 2.034-3.888 4.484-4.352 2.145 1.121 1.068 3.232 1.522 5.359 3.938-3.602 6.848-7.639 9.379-11.919 1.215-2.061-.879-4.161-.597-6.339.076-.863.416-1.624.914-2.323 1.666-1.292 1.42-4.314 4.18-4.628 2.288 1.91 2.417 4.289 1.325 6.81-.813 1.873-1.795 3.667-2.237 5.685-5.79 10.533-13.604 19.248-23.396 26.196z"/><path fill="#43506C" d="M255.284 347.046c-.57-1.517-.127-2.864.7-4.141 1.786-2.752 1.8-5.496-.015-8.24-.375-3.888 1.82-6.801 3.709-9.832 1.738.62 2.086 2.435 3.119 3.66-1.415 6.627-3.78 12.868-7.513 18.553z"/><path fill="#303A52" d="M262.799 328.494c-2.073-.276-2.325-1.974-2.748-3.536-.222-.149-.294-.287-.21-.422.081-.133.157-.195.239-.195 1.538-2.307 1.793-4.976 2.175-7.611 1.555.275 2.069-.8 2.383-2.185.476 4.95-.236 9.514-1.839 13.949z"/><path fill="#FCFCFB" d="M269.616 199.097c.637-4.374-.123-8.817.872-13.202.563-2.474 3.649-5.799 6.223-6.061 1.563-.16 2.497.396 2.577 1.939.064 1.241.075 2.555-.258 3.734-.706 2.515-1.381 4.503-.083 7.504 1.575 3.637-.659 7.784-3.003 11.039-1.697 2.354-3.893 4.42-6.828 5.721v-4.925c.524-1.885-1.001-3.945.5-5.749z"/><path fill="#344361" d="M258.118 218.45c-1.247 6.58-7.56 7.244-11.942 10.12-1.189.782-2.784.953-4.19 1.4-.46-1.302-.021-2.334 1.235-2.716 1.869-.566 2.088-2.101 2.041-3.516-.174-5.234 1.042-10.399.72-15.631 1.003-2.132 3.047-2.093 4.936-2.38.75-.512.168 2.32 1.6.576.791-.956 2.219-2.2 3.501-.879 1.31 1.347.743 3.104-.433 4.316-2.501 2.576-4.72 5.253-5.198 8.979-.143 1.094-.869 2.454.4 3.104 1.32.678 2.049-.672 2.631-1.585 1.038-1.627 2.417-2.325 4.308-2.081.13.102.26.198.391.293z"/><path fill="#FAFBFA" d="M246.355 207.907c1.258.963.629 2.31.58 3.454-.18 4.186-.373 8.373-.823 12.532-.189 1.738.771 4.749-3.032 4.095-.243-.044-.724 1.29-1.096 1.983l-1.868 2.08c-3.073 1.064-3.474-1.053-3.702-3.199-.443-4.121.406-8.179.691-12.266.052-1.95.358-3.737 2.751-4.115 2.052.396 1.707 2.103 1.883 3.502.357 2.828-.709 5.607-.059 8.486 1.114-4.247 1.357-8.619 1.672-12.983.284-1.791.66-3.509 3.003-3.569z"/><path fill="#344360" d="M240.181 212.64c-1.47.771-2.407 1.867-2.22 3.647-.955 1.405-2.411 1.13-3.789 1.122a2.082 2.082 0 0 1-.907-.318c-.619-.747-.708-1.479.049-2.191 3.144-.556 5.02-3.063 7.204-4.947 4.479-3.854 8.946-7.711 13.51-11.47 2.659-2.184 5.542-3.005 8.852-2.837 1.222 1.399.93 2.991.585 4.588-.711 1.917-2.117 2.581-4.065 2.274-2.352-1.409-4.247-.864-5.935 1.229-.688.857-1.324 1.887-2.509 2.228-1.312 1.178-3.146 1.114-4.602 1.944-1.172.93-2.225 1.934-2.228 3.586-.835 2.028-2.394 1.573-3.945 1.145z"/><path fill="#F9FAF9" d="M234.08 217.042a.75.75 0 0 0 .53-.023c1.228 1.373.902 2.846-.047 4.082-2.825 3.673-1.156 8.021-1.911 11.996-.098.517.23-.113.403-.132 1.968-.204 1.291.951 1.007 1.905-1.219 1.691-2.191 4.7-4.469 3.818-1.864-.722-.723-3.682-.756-5.688-.052-3.144 1.347-6.394-.691-9.437-.274-.406-.052-1.536.341-1.932 1.857-1.87 1.987-4.198 2.181-6.598.083-1.017.339-2.276 1.901-2.206.657 1.027.205 2.167.324 3.249.084.76.214 1.354 1.187.966z"/><path fill="#344361" d="M234.064 234.87c-.063-.451-.129-1.298-.179-1.298-3.738.093-2.039-2.675-1.951-4.146.191-3.257-.932-6.909 2.49-9.438.723-.531.354-1.945.187-2.967l3.352-.731c-.193 4.431-.441 8.857-.553 13.293-.044 1.688.204 3.408 2.708 2.473-2.02.936-4.038 1.876-6.054 2.814z"/><path fill="#F8F8F8" d="M262.71 200.482l.17-4.837c.011-2.424-.227-4.853.643-7.231.417-1.145.962-2.291 2.146-2.106 1.12.172.538 1.501.577 2.323.063 1.342-.013 2.69-.025 4.037-.469 1.901-.419 3.792.052 5.688.51 2.029.506 4.106-.272 6.02-.755 1.846-.585 3.502.218 5.208.242 2.807-1.076 4.487-3.74 5.206-2.106-1.621-1.234-3.94-1.345-5.995-.154-2.883.694-5.612 1.576-8.313z"/><path fill="#F7F8F8" d="M219.318 246.633c.365-6.266.661-11.972 1.047-17.671.127-1.869.235-1.921 2.688-1.689.845.078.479-.535.653-.804.723-1.096.793-2.632 2.631-3.454.077 2.054.303 3.663-1.383 5.228-1.415 1.314-1.939 3.299-2.058 5.306-.182 3.083-.565 6.162-.585 9.245-.016 1.94-.942 2.854-2.993 3.839z"/><path fill="#344361" d="M262.71 200.482c.224 4.771-1.313 9.517-.234 14.304-2.107.441-2.141 3.354-4.356 3.663 0 .002-.103-.104-.103-.104-.567-.466-.875-1.121-.873-1.802.017-4.563.45-9.103.901-13.64.043-.452.419-.799.802-1.07 1.44-.005 2.99.286 3.863-1.351z"/><path fill="#344360" d="M266.213 209.578c-1.149.306-1.365-.328-1.287-1.271.433-5.217.861-10.427 1.293-15.645.103 1.563-.094 3.231.41 4.654.362 1.036 1.132 2.663 2.988 1.781.082 1.936.196 3.878-.498 5.75-.166-.499-.318-1.574-.759-1.218-1.032.838-2.688 1.566-2.167 3.364.261.911.552 1.712.02 2.585z"/><path fill="#344361" d="M234.08 217.042c-.606.688-1.313 1.693-1.465-.222-.104-1.325-.037-2.661-.045-3.99 1.403.271.302 1.446.743 2.066-.065.829-.137 1.663.767 2.146z"/><path fill="#313D59" d="M284.145 191.031c.047-3.276.336-5.648 1.472-7.83.368-.703.875-1.504 1.808-1.288.769.178.839.999.865 1.695.111 2.982 0 5.951-1.049 8.787-.388 1.047-.924 2.46-2.233 2.183-1.216-.253-.775-1.709-.854-2.692-.046-.563-.009-1.141-.009-.855z"/><path fill="#344461" d="M56.934 185.32c-2.093-5.871-4.183-11.743-5.66-17.807-.453-1.854-1.324-4.14.789-5.256 2.083-1.104 4.239-.131 5.884 1.578 9.979 10.384 20.09 20.648 25.341 34.543 1.164 3.072 3.114 5.844 4.658 8.775.463.875 1.011 1.517 2.062 1.562.708 4.345.11 8.891 2.105 13.046.512 1.061 1.469 2.154.526 3.479-.464.022-.93.041-1.395.064-1.694-.37-1.798-1.927-2.275-3.15-2.496-6.404-4.771-12.898-7.179-19.336-.432-1.152-.608-2.938-1.897-3.036-1.563-.123-1.296 1.835-1.846 2.865-1.861 3.498-1.963 7.756-4.671 10.896-.875-.037-1.447-.517-1.854-1.25-.645-2.359-2.382-4.149-3.316-6.354-.561-1.324-1.102-2.677 1.123-3.068 2.241-.395 2.116-2.174 1.888-3.765-.604-4.221-2.269-7.944-5.802-10.544-2.476-1.822-4.951-3.657-7.56-5.347-.339.724.003 1.695-.921 2.105z"/><path fill="#FBFBFB" d="M56.934 185.32c.314-1.083-.452-2.244.347-3.522 6.359 4.533 13.859 7.908 14.825 17.116.395 3.796-.565 5.155-3.983 4.81 1.2 2.318 2.372 4.485 3.436 6.708.256.535 1.402 1.285-.037 1.861-1.625-.684-2.457-2.031-3.197-3.554-2.137-4.403-4.364-8.766-6.555-13.146 2.022-.968 3.09.81 4.506 1.58.578.317 1.121 1.067 1.791.645.853-.534.413-1.45.207-2.185-.392-1.381-1.354-2.361-2.479-3.184-1.56-1.138-3.18-2.188-5.282-3.824.563 2.377-.954 3.989-.063 5.845.114 2.604-.211 5.229.575 7.805.198.649.575 1.819-.448 2.054-1.061.242-1.612-.786-1.735-1.697-.454-3.461-.81-6.937-1.208-10.403-1.033-1.088-.075-2.449-.49-3.621l-.21-3.288zM73.374 213.54l4.879-14.165c.25-.72.28-1.715 1.349-1.676.899.033 1.357.813 1.652 1.553a555.838 555.838 0 0 1 3.334 8.568c2.226 5.826 4.435 11.652 6.656 17.48-1.798 1.371-2.45-.113-2.875-1.349a13.426 13.426 0 0 0-1.808-3.536c-1.609-1.41-3.478-2.437-5.249-3.606-1.87-1.242-3.161-2.86-2.747-5.315 1.87-2.551 2.979.263 4.493.469-.645-2.121-1.449-4.332-2.377-6.771-.943 1.981-1.236 4.045-2.248 5.813-.469 1.193-.659 2.561-1.974 3.237-1.424 1.504-2.231.295-3.085-.702zM92.638 225.24c-2.339-5.274-4.438-10.59-2.632-16.525 1.246-2.058 2.882-1.468 4.366-.472 2.64 1.771 5.146 3.747 7.774 5.536 1.166.795 1.026 1.599.462 2.609-.881 1.565-1.552.113-2.11-.238-1.646-1.035-3.146-2.289-4.77-3.365-2.45-1.625-3.946-.984-3.942 1.979.004 4.737 1.424 9.044 5.313 12.125a100.917 100.917 0 0 0 6.674 4.829c1.272.849 1.711 1.681.865 3.076-1.144 1.894-2.326-.04-2.67-.344-3.266-2.902-7.71-4.655-9.33-9.21z"/><path fill="#354461" d="M60.448 194.467c-.89-2.183-.563-4.491-.871-7.801 3.663 3.529 8.388 4.596 9.795 9.389.334 1.139.857 2.68-.368 3.458-.97.615-1.75-.741-2.621-1.2-1.582-.832-2.644-2.549-4.613-2.72-.105-.386-.348-.791-.288-1.148.114-.686.849-1.697-.276-1.813-.993-.101-.541 1.179-.758 1.835z"/><path fill="#344461" d="M78.953 211.454c.209 3.663 3.238 5.013 5.657 6.827.807.607 1.668 1.085 1.948 2.138-3.704-1.51-6.906-3.834-10.102-6.176.466-1.145.46-2.479 1.392-3.435.57-.121.942.087 1.105.646zM57.143 188.602c.599 1.15.599 2.377.493 3.619-.363.673-.724 1.344-1.088 2.013-.054-1.595-.105-3.19-.159-4.784l.754-.848z"/><path fill="#2C3854" d="M39.124 177.728c-.003-1.236-.209-2.626 1.057-3.409 1.394-.865 2.321.35 3.332.993 5.216 3.316 9.874 7.052 10.52 13.857.12 1.272.166 2.5-.354 3.692-.413.94-.995 1.41-2.138 1.104-6.22-1.673-12.397-9.699-12.417-16.237z"/><path fill="#565B70" d="M227.057 342.238c-3.847 4.252-8.684 7.327-13.009 11.005-8.422 7.155-18.563 11.029-28.507 15.313-1.138.491-2.388.849-3.215 1.889-3.619 2.683-7.85 2.688-12.051 2.667-9.319-.05-16.402-5.268-23.364-10.495-15.378-11.534-29.78-24.301-45.014-36.022-7.349-5.656-14.899-11.021-22.408-16.451-1.369-.99-2.784-2.04-4.562-2.278-1.195-1.477-.411-3.205-.605-4.809 4.043 1.912 7.362 4.891 10.896 7.523 10.971 8.183 21.93 16.382 32.709 24.812 9.878 7.725 19.391 15.917 29.305 23.598 6.006 4.659 11.96 9.688 19.959 10.773 3.72 1.796 7.514.572 10.946-.452 14.772-4.397 28.306-11.326 40.43-20.941 2.729-2.16 5.094-4.875 8.49-6.132z"/><path fill="#A4AABB" d="M82.534 323.654c-.375-3.353-2.825-3.916-5.538-4.124-.402-1.14-.807-2.273-1.209-3.409 1.948-1.096 3.208.473 4.631 1.242 10.662 5.773 19.713 13.743 29.074 21.308 10.429 8.428 20.129 17.753 31.067 25.553 5.869 4.188 11.738 8.406 18.388 11.379 3.422 1.532 7.007 1.8 10.649 2.335 12.767 1.872 23.999-3.554 35.681-6.901 1.643-.469 3.148-1.389 4.853-1.72.343-.002.673.068.98.222.75 1.675-.75 2.347-1.508 3.332-.862 1.114-2.332 1.757-2.6 3.346-2.232 1.963-5.135 2.245-7.81 3.069a82.287 82.287 0 0 1-14.914 3.143c-2.644.347-5.272.883-7.962.697-.572-.007-1.146-.005-1.715-.007-2.241-.123-4.499.161-6.728-.242-3.903-1.599-7.776-3.243-11.847-4.5-4.393-1.355-7.778-4.742-11.671-7.138-15.234-9.373-27.514-22.372-41.194-33.653-5.217-4.308-10.553-8.45-16.163-12.242-1.379-.938-2.925-1.271-4.464-1.69z"/><path fill="#8C91A7" d="M210.523 369.737c-6.617 3.207-13.646 5.157-20.763 6.859-2.433.58-4.757 1.724-7.206 2.065-12.554 1.76-23.815-.877-34.561-8.179-16.971-11.526-31.699-25.724-47.726-38.352-7.683-6.053-15.411-12.067-24.48-16.013-.219-1.146-.441-2.288-.661-3.435 1.275-1.174 2.306-.124 3.397.374 6.803 3.118 12.672 7.702 18.513 12.236 7.467 5.802 14.979 11.567 22.001 17.925 8.813 8.555 18.259 16.342 28.39 23.285 6.073 4.161 12.418 7.74 19.781 9.28 6.839 1.432 13.605 1.166 20.223-.725 6.378-1.82 12.594-4.219 18.748-6.723 1.69-.334 3.234-1.601 5.103-.792.64 1.045.17 1.701-.759 2.195z"/><path fill="#6B6C86" d="M74.924 307.866c.547-2.098 1.616-.58 2.219-.187 8.673 5.673 17.02 11.806 25.162 18.207 8.674 6.82 17.36 13.629 25.883 20.638 8 6.586 16.018 13.107 24.451 19.159 9.239 6.63 18.988 8.197 29.688 4.766l3.445.004c-.833 2.994-3.983 2.251-5.823 3.62-5.474 1.396-10.955.877-16.438.087-1.134-.03-2.228-.275-3.292-.653-1.477-.516-3.021-.89-4.247-1.953-4.189-3.673-8.624-6.996-13.679-9.413-2.892-1.316-5.146-3.471-7.422-5.608-6.015-6.638-13.266-11.878-20.194-17.438-9.441-7.572-18.746-15.338-28.722-22.242-3.648-2.526-7.85-4.284-10.918-7.633-.038-.449-.077-.903-.113-1.354z"/><path fill="#787D93" d="M75.035 309.219c7.923 4.065 15.041 9.348 21.986 14.842 11.584 9.167 23.083 18.445 34.561 27.747 1.479 1.194 2.631 2.788 3.939 4.192-1.791 1.378-2.789-.324-3.79-1.163-4.476-3.739-8.972-7.447-13.407-11.229-10.864-9.115-21.81-18.14-33.523-26.15-2.94-2.013-6.092-3.919-9.676-4.771l-.09-3.468z"/><path fill="#C5CAD5" d="M85.283 329.883c-.433-.877-.796-1.77-.683-2.778 1.854-1.075 2.988.411 4.227 1.273 10.043 7.021 19.164 15.2 28.47 23.117 9.501 8.082 19.289 15.752 29.487 22.905 2.322 1.626 5.145 2.509 7.451 4.208 1.037.761 3.029 1.297 1.526 3.321-2.427.759-4.713-.361-7.078-.481-2.201-.479-4.431-.865-6.583-1.544-.985-.31-2.359-.273-2.438-1.847-.642-2.557-2.563-4.097-4.715-5.08-7.413-3.384-12.687-9.555-19.035-14.313-8.164-6.12-15.248-13.578-24.097-18.924-3.366-2.026-4.742-6.292-6.532-9.857z"/><path fill="#EFF1F4" d="M100.396 365.044c-.896-.98-1.788-1.96-2.678-2.94-.976-2.877 1.632-2.938 3.223-4.086-3.005-3.022-6.049-6.041-9.076-9.072-1.296-1.365-2.229-3.025-3.579-4.354-.604-.928-1.488-1.773-.931-3.056 1.261-1.208 2.229-.025 2.901.63 1.887 1.854 4.396 2.985 6.152 4.829 7.416 7.774 15.906 14.287 24.027 21.235.639.546 1.217 1.322.976 2.436-2.801-.462-4.547-3.062-7.63-3.468.627 3.546 4.379 5.728 3.847 9.515-.757.595-1.547.354-2.24-.045-4.654-2.679-9.107-5.648-13.199-9.151-.803-.683-1.093-1.724-1.793-2.473z"/><path fill="#9DA7BE" d="M139.663 378.061c2.751 1.653 6.115 1.261 8.945 2.656 1.166 1.263 1.901 2.807 2.649 4.31 1.36 2.729.491 4.19-2.537 4.035-1.922-.098-3.575.012-4.853 1.599-4.671.004-8.939-1.245-12.708-4.072-.078-1.162.258-2.138 1.291-2.78 1.644-.64 3.104.171 4.619.578.629.166 1.347.644 1.885-.019.494-.609.024-1.29-.17-1.927-.438-1.442-1.793-2.783-.506-4.423.462.013.922.026 1.385.043z"/><path fill="#C5CAD5" d="M132.78 384.207c-1.376-.69-2.751-1.385-4.13-2.074 1.742-2.417-.556-3.919-1.339-5.743-.307-.713-1.042-1.339-.304-2.1.577-.594 1.247-.166 1.879.085 3.128 1.221 6.263 2.427 9.395 3.643-.147 2.054 1.405 3.509 1.878 5.331.466 1.793.411 3.238-2.219 2.26-1.664-.618-3.439-.943-5.16-1.402z"/><path fill="#A8ADBE" d="M156.129 381.4c-1.031-2.181-3.333-2.78-5.148-3.805-12.566-7.096-23.393-16.467-34.399-25.654-9.608-8.024-18.967-16.376-29.167-23.681-.84-.602-1.734-1.12-2.815-1.153-.69-1.149-1.379-2.302-2.066-3.453 1.324-.932 2.582-.619 3.813.204 6.07 4.056 11.916 8.414 17.46 13.161 8.049 6.889 16.343 13.522 24.016 20.806 7.867 7.473 17.324 12.577 26.081 18.706 2.858 2.001 6.759 2.495 10.15 3.77 1.122.421 2.573.393 3.127 1.83-2.904 1.855-6.031.942-9.105.738-.831-.246-1.545-.653-1.947-1.469z"/><path fill="#66718E" d="M180.261 373.198c1.552-1.483 4.095-.984 5.509-2.747 15.657-5.212 29.64-13.337 42.248-23.965 7.511-6.327 15.007-12.646 21.779-19.771 2.507-2.641 4.433-5.826 7.537-7.891-.156 2.75-2.146 4.402-3.812 6.205-13.085 14.182-27.487 26.831-43.654 37.423-4.303 2.816-9.299 4.174-13.779 6.614-4.868 2.943-9.935 5.123-15.828 4.132z"/><path fill="#7F89A2" d="M118.324 343.608c4.066 1.94 6.889 5.505 10.493 8.034 2.175 1.529 3.628 4.205 6.703 4.358 2.061 2.132 4.413 3.895 6.883 5.51 4.594 3.201 9.185 6.417 13.773 9.622 1.372.463 2.749.923 4.121 1.386 1.421 1.922 3.746 1.523 5.611 1.873 6.307 1.177 12.636.982 18.82-1.004 8.412-2.032 16.712-4.405 24.434-8.438 13.769-7.855 25.513-18.314 37.162-28.896.959 1.658-.409 2.521-1.278 3.447-7.438 7.951-15.905 14.716-24.721 21.03-4.423 3.168-8.735 6.587-13.923 8.545-7.044 3.24-14.328 6.31-21.805 7.799-12.006 2.388-23.492-.323-33.935-7.08-11.34-7.339-21.525-16.099-31.552-25.066-.328-.304-.524-.747-.786-1.12z"/><path fill="#7F8EAE" d="M206.407 369.068c3.725-2.548 7.467-5.067 11.168-7.649 9.75-6.79 18.981-14.201 27.212-22.808.708-.74 1.566-1.387 1.542-2.563 2.182-2.193 3.688-5.132 6.875-6.213-.093 3.6-2.083 6.262-4.335 8.802-3.515 1.874-5.733 5.212-8.438 7.913-5.793 5.783-12.321 10.544-18.981 15.161-2.353 1.629-4.578 3.416-6.924 5.046-.957.661-1.831 1.932-3.294.936-1.61.459-3.216.919-4.825 1.375z"/><path fill="#96A4BC" d="M248.392 338.097c2.253-2.378 3.329-5.438 4.811-8.262 1.422-2.922 2.474-6.307 6.877-5.497a10.8 10.8 0 0 0-.029.62l-4.08 9.705c-1.633 1.277-1.55 3.747-3.396 4.874-1.366-.659-2.972.295-4.299-.645-.179-.296-.136-.56.116-.795z"/><path fill="#767C92" d="M209.166 364.946c-1.103 2.08-3.413 2.072-5.205 2.879-5.036 2.271-10.207 4.235-15.534 5.722-1.065.298-2.229.236-3.353.345-6.285 1.886-12.661 2.306-19.095.966-1.065-.22-2.547-.069-2.925-1.658 5.735.741 11.471 1.325 17.205 0 5.528-.417 10.563-2.711 15.829-4.131 4.747-.153 8.654-2.949 13.078-4.123z"/><path fill="#222A42" d="M184.41 381.561c7.781-1.466 15.597-2.803 22.864-6.171 4.708-2.84 9.522-5.44 14.914-6.793 2.97 2.426 1.114 4.934.132 7.427-6.749 4.588-14.221 7.511-22.056 9.604-4.054.7-8.122 1.321-12.243.914-3.307-.331-4.301-1.805-3.611-4.981z"/><path fill="#6D7B93" d="M181.607 392.42c-8.021 1.142-16.045 1.235-24.072.063 2.732-2.459 2.788-3.055.541-6.097-.731-.989-1.726-1.831-1.958-3.105-.209-1.139.108-1.803 1.418-1.118 3.215-.013 6.433-.021 9.648-.032l7.584.068c-.439 1.909-2.079 1.22-3.27 1.547-1.16.318-2.959-.89-3.41 1.013-.37 1.552 2.229 4.466 3.823 4.644 1.381.154 2.708-.298 4.06-.465.794-.098 1.588-.147 2.391-.081.729.091 1.416.265 1.886.896.45.888.903 1.779 1.359 2.667z"/><path fill="#323C58" d="M180.245 389.75c-.675-.021-1.35-.04-2.026-.063-1.054-1.646-.515-4.017-2.617-5.275-.68-.404-.59-1.668.545-2.172 2.754-.227 5.509-.453 8.262-.681.024 3.026 1.516 4.206 4.551 4.064 3.756-.176 7.535-.014 11.305.002-6.435 2.545-13.297 3-20.02 4.125z"/><path fill="#364567" d="M222.321 376.024c-.114-1.355-.023-2.654.396-3.991.339-1.095.776-2.553-1.117-2.941 1.822-3.388 5.187-4.552 8.468-5.801.396-.149.769.375.993.785.642 2.418.854 4.797-.611 7.029-2.724 1.622-4.98 4.01-8.129 4.919z"/><path fill="#4E6089" d="M230.449 371.108c.01-2.58.021-5.162.028-7.738 1.288-2.531 3.065-4.429 6.093-4.696 1.373 3.311.189 7.866-2.698 10.002-.99.734-2.13 1.263-2.683 2.458a44.93 44.93 0 0 0-.74-.026z"/><path fill="#B2BED2" d="M236.572 358.671c-2.032 1.563-4.061 3.132-6.093 4.696l-8.881 5.724c-4.747 2.161-9.227 4.934-14.324 6.295-.223-2.968 3.204-3.351 3.982-5.609 1.969-2.728 5.199-3.595 7.901-5.172 10.171-5.941 18.905-13.464 26.016-22.85.914-1.201 1.796-2.354 3.227-2.946 1.313.693 3.262-2.261 4.174.729-.27.646-.543 1.285-.813 1.93-2.704 5.157-5.875 9.923-10.955 13.091l-4.234 4.112z"/><path fill="#7B8FB9" d="M240.807 354.558c3.652-4.363 7.304-8.724 10.957-13.09-.228 2.261 2.281 4.226.868 6.546-2.788 4.592-5.916 8.938-9.91 12.587-.326.3-.693.669-1.188.367-.692-.434-.799-1.151-.512-1.809.702-1.593.617-3.104-.215-4.601z"/><path fill="#35435F" d="M272.552 203.636c0-2.265-.063-4.292.022-6.319.063-1.511 1.2-2.423 2.495-2.301 1.616.146 1.153 1.71 1.053 2.755-.231 2.434-.948 4.641-3.57 5.865z"/><path fill="#384561" d="M273.001 192.128c.119-2.27.113-4.076.348-5.854.125-.965 1.04-1.682 1.956-1.608 1.247.098 1.115 1.296.99 2.154-.291 1.923-.759 3.809-3.294 5.308z"/><path fill="#FBFBFA" d="M258.845 201.834c-.276 5.505-.557 11.005-.83 16.512-2.322.571-3.907 2.039-5.169 4.019-.473.745-1.387 1.396-2.33 1.112-1.188-.356-1.264-1.554-1.236-2.571.123-4.021 1.35-7.62 4.312-10.484.575-.557 1.225-1.031 1.787-1.598.946-.951.969-2.316.253-3.104-.743-.822-1.591.305-2.26.833-.706.554-1.323 1.214-1.984 1.835-.657-.815-.371-1.645-.428-2.425.709-1.98 2.354-3.212 3.777-4.592 1.455-1.414 2.925-1.369 4.108.463z"/><path fill="#344361" d="M240.181 212.64c1.292-.463 2.848-.026 3.947-1.148-.211 3.988-.402 7.979-.663 11.961a3.991 3.991 0 0 1-.641 1.896c-.465.692-.902 1.825-1.983 1.417-.88-.331-.631-1.392-.59-2.156.161-3.074.434-6.146.555-9.227.037-.922.652-2.082-.625-2.743z"/><path fill="#384764" d="M78.953 211.454c-.369-.215-.734-.432-1.103-.646.81-2.447 1.615-4.892 2.719-8.226l4.115 11.226c-2.446.004-3.164-3.313-5.731-2.354z"/><path fill="#929FBE" d="M248.401 338.81c-9.481 13.799-22.146 23.784-37.145 30.969-.245-.015-.488-.024-.734-.041.234-.68.474-1.359.708-2.041 4.766-3.276 9.518-6.571 14.299-9.822 6.226-4.238 11.684-9.391 17.186-14.483 1.896-1.759 2.915-4.456 5.679-5.29l.007.708z"/><path fill="#4D5A79" d="M176.149 382.241c-.643.919-.381 2.108.328 2.42 2.543 1.108 1.619 3.21 1.742 5.027-.684.025-1.375.002-2.052.085-6.839.856-7.441.512-9.823-5.463-.657-1.652.574-1.33 1.394-1.436 2.336-.296 4.784.556 7.031-.679.458.019.92.032 1.38.046z"/><path fill="#767C92" d="M156.181 371.13c-5.244-2.272-9.869-5.434-13.774-9.622 1.249-.189 2.142.491 3.088 1.152 3.054 2.146 6.12 4.277 9.229 6.345.814.545 1.432 1.095 1.457 2.125z"/><path fill="#787D93" d="M163.056 373.198c6.182 2.932 12.575 2.27 18.998 1.139 1.003-.179 2.015-.303 3.021-.444-8.088 3.213-16.148 2.734-24.171-.241-.3-.112-.409-.747-.605-1.134.864.451 1.756.79 2.757.68z"/><path fill="#8290A8" d="M157.534 382.162c-2.105.593-.458 1.634-.094 2.147.831 1.178 1.956 2.11 2.606 3.469 1.492 3.095 1.069 3.944-2.514 4.702-4.706-.016-9.257-.987-13.773-2.186.4-2.229 1.472-3.125 3.803-2.214 1.104.435 2.667.813 3.428-.341.786-1.188-.417-2.279-1.099-3.278-.776-1.139-1.41-2.309-1.285-3.745 2.506.225 5.016.453 7.521.68.472.257.941.511 1.407.766z"/><path fill="#3E4C69" d="M255.043 212.246c.292.187.444.229.452.296.28 2.22.026 4.265-2.008 5.652-.417.282-.98.146-1.061-.358-.386-2.359.605-4.139 2.617-5.59z"/>
                                </svg>
                            </div>
                            <div class="svg-title-container">VirtualBox</div>
                        </li>
                </ul>
            </div>
            <div class="portfolio-intro">
            <h3 class="white-text">Porfolio</h3>
                <p class="section-lead">
                    Here are some of the projects I have worked on. Click on the
                    images to view the project.
                    <a href="https://github.com/mad0021" target="_blank">GitHub</a>
                    for more projects.
                </p>
                <div style="display: flex; justify-content: center;">
                    <a href="https://github.com/mad0021/Pacman-main" target="_blank">
                        <img src="images\Pacam.png" alt="Pacman" style="width: 720px; height: 520px; padding: 10px 0;">
                    </a>
                </div>
            </div>
        </section>
        <section id="social" class="dark-bg">
            <div class="social-intro">
            <h3 class="white-text">Social</h3>
                <p class="section-lead">
                    If you would like to contact me directly, you can use the
                    <a id="social-contact">contact form</a> below. If you prefer
                    social media, you can find me using these icon links.
                </p>
            </div>
            <div class="social-icons">
                <ul class="grid-list slide-left show-on-scroll">
                    <li>
                        <a href="https://github.com/mad0021" target="_blank">
                            <div class="svg-container">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80px" height="80px" viewBox="0 0 256 250" version="1.1" preserveAspectRatio="xMidYMid"><g><path d="M128.00106,0 C57.3172926,0 0,57.3066942 0,128.00106 C0,184.555281 36.6761997,232.535542 87.534937,249.460899 C93.9320223,250.645779 96.280588,246.684165 96.280588,243.303333 C96.280588,240.251045 96.1618878,230.167899 96.106777,219.472176 C60.4967585,227.215235 52.9826207,204.369712 52.9826207,204.369712 C47.1599584,189.574598 38.770408,185.640538 38.770408,185.640538 C27.1568785,177.696113 39.6458206,177.859325 39.6458206,177.859325 C52.4993419,178.762293 59.267365,191.04987 59.267365,191.04987 C70.6837675,210.618423 89.2115753,204.961093 96.5158685,201.690482 C97.6647155,193.417512 100.981959,187.77078 104.642583,184.574357 C76.211799,181.33766 46.324819,170.362144 46.324819,121.315702 C46.324819,107.340889 51.3250588,95.9223682 59.5132437,86.9583937 C58.1842268,83.7344152 53.8029229,70.715562 60.7532354,53.0843636 C60.7532354,53.0843636 71.5019501,49.6441813 95.9626412,66.2049595 C106.172967,63.368876 117.123047,61.9465949 128.00106,61.8978432 C138.879073,61.9465949 149.837632,63.368876 160.067033,66.2049595 C184.49805,49.6441813 195.231926,53.0843636 195.231926,53.0843636 C202.199197,70.715562 197.815773,83.7344152 196.486756,86.9583937 C204.694018,95.9223682 209.660343,107.340889 209.660343,121.315702 C209.660343,170.478725 179.716133,181.303747 151.213281,184.472614 C155.80443,188.444828 159.895342,196.234518 159.895342,208.176593 C159.895342,225.303317 159.746968,239.087361 159.746968,243.303333 C159.746968,246.709601 162.05102,250.70089 168.53925,249.443941 C219.370432,232.499507 256,184.536204 256,128.00106 C256,57.3066942 198.691187,0 128.00106,0 Z M47.9405593,182.340212 C47.6586465,182.976105 46.6581745,183.166873 45.7467277,182.730227 C44.8183235,182.312656 44.2968914,181.445722 44.5978808,180.80771 C44.8734344,180.152739 45.876026,179.97045 46.8023103,180.409216 C47.7328342,180.826786 48.2627451,181.702199 47.9405593,182.340212 Z M54.2367892,187.958254 C53.6263318,188.524199 52.4329723,188.261363 51.6232682,187.366874 C50.7860088,186.474504 50.6291553,185.281144 51.2480912,184.70672 C51.8776254,184.140775 53.0349512,184.405731 53.8743302,185.298101 C54.7115892,186.201069 54.8748019,187.38595 54.2367892,187.958254 Z M58.5562413,195.146347 C57.7719732,195.691096 56.4895886,195.180261 55.6968417,194.042013 C54.9125733,192.903764 54.9125733,191.538713 55.713799,190.991845 C56.5086651,190.444977 57.7719732,190.936735 58.5753181,192.066505 C59.3574669,193.22383 59.3574669,194.58888 58.5562413,195.146347 Z M65.8613592,203.471174 C65.1597571,204.244846 63.6654083,204.03712 62.5716717,202.981538 C61.4524999,201.94927 61.1409122,200.484596 61.8446341,199.710926 C62.5547146,198.935137 64.0575422,199.15346 65.1597571,200.200564 C66.2704506,201.230712 66.6095936,202.705984 65.8613592,203.471174 Z M75.3025151,206.281542 C74.9930474,207.284134 73.553809,207.739857 72.1039724,207.313809 C70.6562556,206.875043 69.7087748,205.700761 70.0012857,204.687571 C70.302275,203.678621 71.7478721,203.20382 73.2083069,203.659543 C74.6539041,204.09619 75.6035048,205.261994 75.3025151,206.281542 Z M86.046947,207.473627 C86.0829806,208.529209 84.8535871,209.404622 83.3316829,209.4237 C81.8013,209.457614 80.563428,208.603398 80.5464708,207.564772 C80.5464708,206.498591 81.7483088,205.631657 83.2786917,205.606221 C84.805962,205.576546 86.046947,206.424403 86.046947,207.473627 Z M96.6021471,207.069023 C96.7844366,208.099171 95.7267341,209.156872 94.215428,209.438785 C92.7295577,209.710099 91.3539086,209.074206 91.1652603,208.052538 C90.9808515,206.996955 92.0576306,205.939253 93.5413813,205.66582 C95.054807,205.402984 96.4092596,206.021919 96.6021471,207.069023 Z" fill="#161614"></path></g>
                                </svg> 
                            </div>
                            <div class="svg-title-container">GitHub</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/mamadou-diallo-ndoye/" target="_blank">
                            <div class="svg-container">
                            <svg xmlns="http://www.w3.org/2000/svg" height="80" width="80" viewBox="0 0 256 256">
                                <g fill="none">
                                    <path d="M0 18.338C0 8.216 8.474 0 18.92 0h218.16C247.53 0 256 8.216 256 18.338v219.327C256 247.79 247.53 256 237.08 256H18.92C8.475 256 0 247.791 0 237.668V18.335z" fill="#069"></path>
                                    <path d="M77.796 214.238V98.986H39.488v115.252H77.8zM58.65 83.253c13.356 0 21.671-8.85 21.671-19.91-.25-11.312-8.315-19.915-21.417-19.915-13.111 0-21.674 8.603-21.674 19.914 0 11.06 8.312 19.91 21.169 19.91h.248zM99 214.238h38.305v-64.355c0-3.44.25-6.889 1.262-9.346 2.768-6.885 9.071-14.012 19.656-14.012 13.858 0 19.405 10.568 19.405 26.063v61.65h38.304v-66.082c0-35.399-18.896-51.872-44.099-51.872-20.663 0-29.738 11.549-34.78 19.415h.255V98.99H99.002c.5 10.812-.003 115.252-.003 115.252z" fill="#fff"></path>
                                </g>
                            </svg> 
                            </div>
                            <div class="svg-title-container">LinkedIn</div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="contact">
            <div class="contact-intro">
                <h2>Contact</h2>
                <p class="section-lead">
                    Send me a message! Your email address will not be shared.
                    Required fields are marked with a
                    <span class="red-text">*</span>.
                </p>
            </div>

            <form class="contact-form" method="POST" action="/">
                <fieldset id="contact-form-name">
                    <label for="name">Name<span class="red-text">*</span></label>
                    <input type="text" name="name" id="name" placeholder="Contact example" required />
                </fieldset>
                <fieldset id="contact-form-email">
                    <label for="email">Email<span class="red-text">*</span></label>
                    <input type="email" name="email" id="email" placeholder="contact@example.com" required />
                </fieldset>
                <fieldset id="contact-form-no-bots">
                    <label for="bots">Please leave this field empty</label>
                    <input type="text" name="bots" id="bots" placeholder="No bots allowed" />
                </fieldset>
                <fieldset id="contact-form-message">
                    <label for="message">Message<span class="red-text">*</span></label>
                    <textarea name="message" id="message" placeholder="Hi, how are you? Are you available to talk at 18:00 ?" cols="30" rows="18" required></textarea>
                </fieldset>
                <button id="contact-form-submit" type="submit">
                    Send Message
                </button>
            </form>
        </section>
        <footer>
            <p>
                <small id="copyright-text">&copy; Copyright Mamadou 2024</small>
            </p>
        </footer>
        <script src="srcipt.js"></script>
</body>

</html>
