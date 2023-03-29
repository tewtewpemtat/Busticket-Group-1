use crate::models::customer::Customer;
use actix_web::{delete, get, post, web, HttpResponse, Responder};
use serde_json::json;

#[get("/customer/{id}")]
async fn get_customer_by_id(id: web::Path<i32>) -> impl Responder {
    let customerid = id.into_inner();

    if customerid == 2 {
        let response_body = Customer {
            id: customerid,
            bus: "Busbin".to_string(),
            seatnumber: 6,
            name: "JonJack".to_string(),
            date: "2023-03-20".to_string(),
            contact: "0844758262".to_string(),
        };
        HttpResponse::Ok().json(response_body)
    } else {
        return HttpResponse::NotFound().json(json!({
            "message": "Customer not found"
        }));
    }
}

#[post("/customer")]
async fn add_customer(customer: web::Json<Customer>) -> impl Responder {
    if customer.name.is_empty() || customer.contact.is_empty() {
        return HttpResponse::BadRequest().json(json!({
            "message": "Failed creating customer information"
        }));
    }

    let response_body = json!({
        "message": "Customer added successfully",
        "newcustomer": customer
    });
    HttpResponse::Created().json(response_body)
}

#[delete("/customer/{id}")]
async fn delete_customer_by_id(id: web::Path<i32>) -> impl Responder {
    let customer_id = id.into_inner();

    if customer_id == 3 {
        let response_body = json!({
            "message": "Customer deleted"
        });
        HttpResponse::Ok().json(response_body)
    } else {
        return HttpResponse::NotFound().json(json!({
            "message": "No customer Found"
        }));
    }
}
