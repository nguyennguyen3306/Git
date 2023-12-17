import Home from "./Pages/Home"
import Course from "./Pages/Course"
import Edu from "./Pages/Edu"
import { BrowserRouter, Routes, Route } from "react-router-dom";

function App() {
  return (
    <>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Home/>}/>
          <Route path="/Course" element={<Course/>}/>
          <Route path="/Edu" element={<Edu/>}/>
          {/* <Route path="/cateprod/:id" element={<Cateproduct/>}/> */}
          {/* <Route path="/brandprod/:id" element={<BrandProduct/>}/> */}
          {/* <Route path="/todo" element={<Todo/>}/> */}
          {/* <Route path="/todo1" element={<Todo1/>}/> */}
          {/* <Route path="/todo2" element={<Todo2/>}/> */}
          {/* <Route path="/chitiet/:id" element={<Detail />}/> */}
          {/* <Route path="/cart" element={<Cart/>}/> */}
          {/* <Route path="/logout" element={<Logout/>}/> */}
          {/* <Route path="*" element={<Page404/>}/> */}
        </Routes>
      </BrowserRouter>
    </>
  );
}

export default App;
