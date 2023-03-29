use crate::models::seat::Seat;
use actix_web::{get, put, web, HttpResponse, Responder};
use serde_json::json;

#[get("/seat/{id}")]
async fn get_seat_by_id(id: web::Path<i32>) -> impl Responder {
    let busid = id.into_inner();

    if busid == 1 {
        let response_body = Seat {
            seatid: 100,
            seatnumber: 1,
            status: "0".to_string(),
            busid: busid,
            busname: "Busbin".to_string(),
        };
        HttpResponse::Ok().json(response_body)
    } else {
        return HttpResponse::NotFound().json(json!({
            "message": "No seat available"
        }));
    }
}

#[put("/seat/{id}")]
async fn update_seat_status(id: web::Path<i32>, seat: web::Json<Seat>) -> impl Responder {
    let seatid = id.into_inner();
    let new_status = &seat.status;

    if new_status != "1" && new_status != "0" {
        return HttpResponse::BadRequest().json(json!({
            "message": "Seat status update failed"
        }));
    }

    if seatid == 100 {
        let response_body = Seat {
            seatid: seatid,
            seatnumber: 1,
            status: new_status.to_string(),
            busid: 1,
            busname: "Busbin".to_string(),
        };
        HttpResponse::Ok().json(response_body)
    } else {
        return HttpResponse::NotFound().json(json!({
            "message": "Seat ID Invaild"
        }));
    }
}
