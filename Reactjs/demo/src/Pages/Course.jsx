import React from 'react'
import Navbar from "../Components/Navbar";

function Course() {
  return (
    <div>
      <Navbar/>
      <h1 className="inputbar">
            <button className="btn btn-primary">Thêm</button>
          </h1>
          <div class="content">
            {/* content================================= */}
            course
            {/* end content================================= */}
          </div>
    </div>
  )
}

export default Course