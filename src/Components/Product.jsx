import React, { useEffect, useState, } from 'react'
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import { getProducts } from "../redux/productsSlice";
import { useDispatch,useSelector } from 'react-redux';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import Modal from 'react-bootstrap/Modal';
import Chitiet from "./Chitiet";


function Products() {


  
  const {products,loading2}=useSelector((state)=>state.products);
  const dispatch = useDispatch();
  const showmore = useState([]);




  useEffect(()=>{
    dispatch(getProducts());
    console.log();



  },[]);
  return (
 <div className='row'>

        
        

        {products && products.data.map((data,index)=>
  <ul className='col' key={index}>
  <Card style={{ width: '18rem' }}>
      <Card.Img variant="top" src={"https://students.trungthanhweb.com/images/"+ data.images} />
      <Card.Body>
        <Card.Title>{data.name}</Card.Title>
        <Card.Text>
          {data.price}
        </Card.Text>
        <Button id={data.id} onClick={console.log('data')} href='/chitiet/' >Chi tiết</Button>
      </Card.Body>
    </Card>
          </ul>
)}


<div className="row">
  <div className="col"></div>
<Button className='w-50 m-0-auto'>Xem thêm</Button>
<div className="col"></div>
</div>
 </div>
  )
}

export default Products