import React, { useState } from "react";
import "../css/Navbar.css";
import Button from "react-bootstrap/Button";
import "bootstrap/dist/css/bootstrap.min.css";
import Modal from 'react-bootstrap/Modal';

function Navbar() {

    
  return (
    <div>
      <html>
        <head></head>
        <body>
          
          <nav class="main-menu">
            <ul>
              <li>
                <a href="/">
                  <i class="fa fa-home fa-2x"></i>
                  <span class="nav-text">Home</span>
                </a>
              </li>
              <li class="has-subnav">
                <a href="/Course">
                  <i class="fa fa-globe fa-2x"></i>
                  <span class="nav-text">Course</span>
                </a>
              </li>
              <li class="has-subnav">
                <a href="/Edu">
                  <i class="fa fa-comments fa-2x"></i>
                  <span class="nav-text">Edu</span>
                </a>
              </li>
              <li class="has-subnav">
                <a href="#">
                  <i class="fa fa-camera-retro fa-2x"></i>
                  <span class="nav-text">Survey Photos</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-film fa-2x"></i>
                  <span class="nav-text">Surveying Tutorials</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-book fa-2x"></i>
                  <span class="nav-text">Surveying Jobs</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-cogs fa-2x"></i>
                  <span class="nav-text">Tools & Resources</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-map-marker fa-2x"></i>
                  <span class="nav-text">Member Map</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-info fa-2x"></i>
                  <span class="nav-text">Documentation</span>
                </a>
              </li>
            </ul>

            <ul class="logout">
              <li>
                <a href="#">
                  <i class="fa fa-power-off fa-2x"></i>
                  <span class="nav-text">Logout</span>
                </a>
              </li>
            </ul>
          </nav>
        </body>
        
      </html>
    </div>
  );
}

export default Navbar;
