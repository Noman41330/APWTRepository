import React, {useEffect} from "react";
import {useState} from "react";
import axios from "axios";


const DoctorList = ()=>{
    const [students,setDoctors]=useState([]);
    useEffect(()=>{

        axios.get('http://127.0.0.1:8000/api/doctorsList').then(resp=>{
            console.log(resp.data);
            setDoctors(resp.data);
        }).catch(
            err=>{
                console.log(err);
        });

    },[]);

    return (
        <div className="container"> <br/>
            
        </div>
    )




}



export default DoctorList;