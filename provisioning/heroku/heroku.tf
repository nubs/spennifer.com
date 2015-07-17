variable "heroku_name" {
  default = "spennifer"
}

variable "heroku_region" {
  default = "us"
}

resource "heroku_app" "spennifer" {
  name = "${var.heroku_name}"
  region = "${var.heroku_region}"
}

output "heroku_url" {
  value = "${heroku_app.spennifer.web_url}"
}
