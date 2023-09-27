import React from 'react'
import Navbar from "./Navbar";
import Slider from "./Slider"
import Container  from "react-bootstrap/Container";
import Product from "./Product";


function Todo(props) {
  return (
    <>
    <div className="div">
    <Navbar name={props.name}/>
    </div>
      
    <Container>
      <Slider/>
    </Container>

    <Product/>

    </>
  )
}

export default Todo