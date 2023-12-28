import React, { useState } from "react";
import Navbar from "../Components/Navbar";
import Button from "react-bootstrap/Button";
import "bootstrap/dist/css/bootstrap.min.css";
import Modal from "react-bootstrap/Modal";

function Home() {
  const [show, setShow] = useState(false);
  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);
  const [data,setData]= useState([]);
  return (
    <div>
      <Navbar />
      <h1 className="inputbar">
        <Button variant="primary" onClick={handleShow}>
          Thêm
        </Button>
      </h1>
      <div class="content">
        {/* content================================= */}
        home

        <div class="table-responsive">
          <table class="table table-striped
          table-hover
          table-borderless
          table-primary
          align-middle">
            <thead class="table-light">
              <caption>asdasdasdasdd</caption>
              <tr>
                <th>Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
              </tr>
              </thead>
              <tbody class="table-group-divider">
                <tr class="table-primary" >
                  <td scope="row">Item</td>
                  <td>Item</td>
                  <td>Item</td>
                </tr>
                <tr class="table-primary">
                  <td scope="row">Item</td>
                  <td>Item</td>
                  <td>Item</td>
                </tr>
              </tbody>
              <tfoot>
                
              </tfoot>
          </table>
        </div>
        
        <Modal show={show} onHide={handleClose}>
          <Modal.Header closeButton>
            <Modal.Title>Modal heading</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <input type="text" />
          </Modal.Body>
          <Modal.Footer>
            <Button variant="secondary" onClick={handleClose}>
              Close
            </Button>
            <Button variant="primary" onClick={handleClose}>
              Save Changes
            </Button>
          </Modal.Footer>
        </Modal>
        {/* end content================================= */}
      </div>
    </div>
  );
}

export default Home;
