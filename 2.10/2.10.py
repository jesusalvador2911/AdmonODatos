lines = [ "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          "Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies",
          "purus lectus malesuada libero, sit amet commodo magna eros quis urna.",
          "Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.",
          "Pellentesque habitant morbi tristique senectus et netus et malesuada ",
          "fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci."
    ]
f = open("lorem.txt","w")
f.writelines(lines)
f.close