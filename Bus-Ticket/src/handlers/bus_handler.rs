use crate::models::bus::Bus;
use actix_web::{get, put, web, HttpResponse, Responder};
use serde_json::json;

#[get("/bus")]
async fn get_bus() -> impl Responder {
    let response_body = vec![
        Bus {
            id: 1,
            name: "Busbin".to_string(),
            direction: "พัทยา-กรุงเทพ".to_string(),
            outtime: "22:00".to_string(),
            price: 800,
            ticket: 20,
        },
        Bus {
            id: 2,
            name: "Busbong".to_string(),
            direction: "พัทยา-สระบุรี".to_string(),
            outtime: "14:00".to_string(),
            price: 600,
            ticket: 20,
        },
    ];
    HttpResponse::Ok().json(response_body)
}

#[put("/bus")]
async fn update_bus_ticket(bus: web::Json<Bus>) -> impl Responder {
    let new_ticket = bus.ticket;

    if bus.id == 1 {
        let response_body = Bus {
            id: bus.id,
            name: "Busbin".to_string(),
            direction: "พัทยา-กรุงเทพ".to_string(),
            outtime: "22:00".to_string(),
            price: 800,
            ticket: new_ticket,
        };

        HttpResponse::Ok().json(response_body)
    } else {
        HttpResponse::NotFound().json(json!({
            "message": "Bus ID invalid"
        }))
    }
}
