import React, { useEffect, useState, } from 'react'
import Navbar from "./Navbar";
import { Container } from 'react-bootstrap';

function Chitiet(props) {

  const getProducts = (e)=>{
    fetch('https://students.trungthanhweb.com/api/single?apitoken='+localStorage.getItem('token')+'&id='+localStorage.getItem('id'))
    .then((res)=>res.json()).then((res)=>{
      console.log(res);
      const product = res.products;
      var str = ``;
      product.forEach(el => {
        localStorage.setItem('tensp',el.name)
        localStorage.setItem('price',el.price)
        localStorage.setItem('img',el.images)
        localStorage.setItem('content',el.content)
        
      });
    })
  }
  useEffect(()=>{
    getProducts();
  },[])
  
  return (
    <div className="div">
      <Navbar/>
      <Container>
      <div className="">
        <div className="row">
          <div className="col">
            <h1>
            {localStorage.getItem('tensp')}
            </h1>
            <img src={"https://students.trungthanhweb.com/images/"+ localStorage.getItem('img')} alt="" />
          </div>
          <div className="col ">
            <div className="col">
            </div>
            <div className="col">
            <button className='btn btn-primary'>Thêm vào giỏ hàng</button>
            </div>
            {localStorage.getItem('price')}
          </div>
        </div>
        <div className="div">
            {localStorage.getItem('content')}

        </div>
      </div>
      </Container>
    </div>
  )
}
export default Chitiet