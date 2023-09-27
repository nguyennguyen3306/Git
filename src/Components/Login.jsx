import React, { useEffect, useState } from 'react'
import Swal from "sweetalert2";

function Login() {
  const [email,setEmail] =  useState('');
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 1000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener("mouseenter", Swal.stopTimer);
      toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
  });

  const checkLogin= ()=> {
    if (!email || email == '') {
      Toast.fire({
        icon: "error",
        title: "chưa nhập Email",
      })
    }else{
      var data = new URLSearchParams();
      data.append('email', email);
      fetch('https://students.trungthanhweb.com/api/checkLoginhtml',{
        method:'post',
        headers:{
        'Content-type':'application/x-www-form-urlencoded',
        },
        body:data
        
  }).then(res => res.json()).then((res)=>{
      if (res.check==true) {
        localStorage.setItem('token',res.apitoken)
        Toast.fire({
          icon: "success",
          title: "Đăng nhập thành công",
        }).then(() => {
          window.location.href="/";
        });
      }else {
        Toast.fire({
          icon: "error",
          title: "Sai tài khoản",
        })
      }
  });
}
  }
const checkstatus = ()=>{
  if (localStorage.getItem('token') && localStorage.getItem('token')!=null) {
    Toast.fire({
      icon: "error",
      title: "Bạn đã đăng nhập",
    }).then(() => {
      window.location.href="/";
    });
  }
}
useEffect(()=>{
  checkstatus();
},[])
  return (
      <div className="container mt-5 w-100">
      <input className='w-50 mt-5' type="text" placeholder='Email' onChange={(e) => setEmail(e.target.value)} />
      <button className='btn btn-primary' onClick={checkLogin}> Đăng nhập</button>
      </div>
    
  )
}

export default Login