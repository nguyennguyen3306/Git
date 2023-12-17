import React, { useEffect, useState } from "react";
import Navbar from "../Components/Navbar";
import Button from "react-bootstrap/Button";
import "bootstrap/dist/css/bootstrap.min.css";
import Modal from "react-bootstrap/Modal";
import "../css/Edu.css";
import Swal from "sweetalert2";
import axios, { Axios, AxiosError } from "axios";

function Edu() {
  const [show, setShow] = useState(false);
  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);
  const [edu, setEdu] = useState("");
  const [educate, setEducate] = useState([]);
  const url = "http://localhost:8000/api";

  const submitEdu = () => {
    if (edu == "") {
      Swal.fire({
        title: "Chưa nhập loại hình giáo dục",
        text: "",
        icon: "error",
      });
    } else {
      const Eduname = new URLSearchParams();
      Eduname.append("Eduname", edu);

      fetch(url + "/addedu", {
        method: "post",
        headers: {
          "Content-type": "application/x-www-form-urlencoded",
        },
        body: Eduname,
      })
        .then((res) => res.json())
        .then((res) => {
          if (res.check == true) {
            Swal.fire({
              icon: "success",
              title: "Đã thêm thành công",
            });
          } else {
            Swal.fire({
              icon: "error",
              title: res.msg.Eduname,
            });
          }
        });
    }
  };

  const getEdu = () => {
    fetch(url + "/getedu")
      .then((res) => res.json())
      .then((res) => {
        if (res.check == true) {
          // setTodo(res.todo)
        }
      });
  };
  const testlog = () => {};
  useEffect(() => {
    testlog();
    // getEdu();
  }, []);
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
        Loại hình giáo dục
        <div class="table-responsive">
          <table
            class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle"
          >
            <thead class="table-light">
              <caption></caption>
              <tr>
                <th>Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr class="table-primary">
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
            <tfoot></tfoot>
          </table>
        </div>
        <Modal show={show} onHide={handleClose}>
          <Modal.Header closeButton>
            <Modal.Title>Thêm loại hình giáo dục</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <input
              className="addEduinput"
              type="text"
              value={edu}
              onChange={(e) => setEdu(e.target.value)}
              placeholder="Nhập loại hình giáo dục"
            />
          </Modal.Body>
          <Modal.Footer>
            <Button variant="secondary" onClick={handleClose}>
              Đóng
            </Button>
            <Button variant="primary" onClick={() => submitEdu()}>
              Thêm
            </Button>
          </Modal.Footer>
        </Modal>
        {/* end content================================= */}
      </div>
    </div>
  );
}

export default Edu;
