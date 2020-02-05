<nav class="navbar navbar-expand-lg navbar-light nav-bar" style="height: 100px">
    <a href="{{ route('website.home') }}" ><img class="logo" style="width: 60px; height: 60px" src="{{ asset('assets/img/icon/logo.jpg') }}" alt="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto ml-auto mt-2 mt-lg-0 nav-style">
            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{  route('website.home')  }}">Home</a>
            </li>

            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link nav_item_design" href="">About Us</a>--}}
            {{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{ route('website.about') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{ route('website.products') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{ route('website.offers') }}">Offers</a>
            </li>

            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{ route('website.contact') }}">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">

        </ul>

    </div>
</nav>{
  "_from": "style-loader@1.0.0",
  "_id": "style-loader@1.0.0",
  "_inBundle": false,
  "_integrity": "sha512-B0dOCFwv7/eY31a5PCieNwMgMhVGFe9w+rh7s/Bx8kfFkrth9zfTZquoYvdw8URgiqxObQKcpW51Ugz1HjfdZw==",
  "_location": "/style-loader",
  "_phantomChildren": {
    "ajv": "6.10.2",
    "ajv-keywords": "3.4.1"
  },
  "_requested": {
    "type": "version",
    "registry": true,
    "raw": "style-loader@1.0.0",
    "name": "style-loader",
    "escapedName": "style-loader",
    "rawSpec": "1.0.0",
    "saveSpec": null,
    "fetchSpec": "1.0.0"
  },
  "_requiredBy": [
    "/react-scripts"
  ],
  "_resolved": "https://registry.npmjs.org/style-loader/-/style-loader-1.0.0.tgz",
  "_shasum": "1d5296f9165e8e2c85d24eee0b7caf9ec8ca1f82",
  "_spec": "style-loader@1.0.0",
  "_where": "E:\\React\\first-project\\node_modules\\react-scripts",
  "author": {
    "name": "Tobias Koppers @sokra"
  },
  "bugs": {
    "url": "https://github.com/webpack-contrib/style-loader/issues"
  },
  "bundleDependencies": false,
  "dependencies": {
    "loader-utils": "^1.2.3",
    "schema-utils": "^2.0.1"
  },
  "deprecated": false,
  "description": "style loader module for webpack",
  "devDependencies": {
    "@babel/cli": "^7.2.3",
    "@babel/core": "^7.4.0",
    "@babel/preset-env": "^7.4.2",
    "@commitlint/cli": "^8.1.0",
    "@commitlint/config-conventional": "^8.1.0",
    "@webpack-contrib/defaults": "^5.0.2",
    "@webpack-contrib/eslint-config-webpack": "^3.0.0",
    "babel-jest": "^24.5.0",
    "commitlint-azure-pipelines-cli": "^1.0.2",
    "cross-env": "^5.2.0",
    "css-loader": "^3.1.0",
    "del": "^5.0.0",
    "del-cli": "^2.0.0",
    "es-check": "^5.0.0",
    "eslint": "^6.1.0",
    "eslin
