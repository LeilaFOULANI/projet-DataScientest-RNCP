provider "aws" {
  region = "eu-west-3"
}


data "aws_vpc" "existing_vpc" {
  id = "vpc-039b85cee8ab65414"
}


data "aws_security_group" "jenkins_sg" {
  id = "sg-00a387eca05832f34"
}


resource "aws_instance" "web_server" {
  ami                    = "ami-0fa010e5859fc68ee"
  instance_type          = "t2.micro"
  subnet_id              = "subnet-03aab48231b559845"
  vpc_security_group_ids = ["sg-0b2da39bffff2ef10"]

  tags = {
    Name = "WebServer"
  }
}


output "instance_id" {
  value = aws_instance.web_server.id
}
