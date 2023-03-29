use serde::{Deserialize, Serialize};
#[derive(Serialize, Deserialize)]
pub struct Customer {
    pub id: i32,
    pub name: String,
    pub contact: String,
    pub date: String,
    pub bus: String,
    pub seatnumber: i32,
}
