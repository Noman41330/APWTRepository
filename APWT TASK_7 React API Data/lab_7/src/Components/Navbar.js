import React from "react";
import 'bootstrap/dist/css/bootstrap.min.css';
import {Link} from "react-router-dom";

function Navbar(){
    return(
        <div className="container">
            <br/>
            <div className="btn-group">
                <Link to="/DoctorList" className="btn btn-outline-primary">Doctor List</Link>
            </div>
        </div>

    )
}

export default Navbar;