use serde::{Deserialize, Serialize};
#[derive(Serialize, Deserialize)]
pub struct Bus {
    pub id: i32,
    pub name: String,
    pub direction: String,
    pub outtime: String,
    pub price: i32,
    pub ticket: i32,
}
