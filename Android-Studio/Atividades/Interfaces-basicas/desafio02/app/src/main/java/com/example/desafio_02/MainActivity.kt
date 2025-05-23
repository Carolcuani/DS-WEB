package com.example.desafio_02

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.unit.dp
import com.example.desafio_02.ui.theme.Desafio02Theme


class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Desafio02Theme {
                Surface(
                    modifier = Modifier.fillMaxHeight().fillMaxWidth(),
                    color = Color(0xFF546E7A)
                ) {

                    Column(
                        verticalArrangement = Arrangement.Center,
                        horizontalAlignment = Alignment.CenterHorizontally
                    ) {
                        Text(text = "Produto: Fone")
                        Text(text = "Preço: R$189")


                        Card(
                            modifier = Modifier
                                .padding(8.dp)
                                .size(90.dp),
                            shape = CircleShape
                        ) {
                            Box(
                                modifier = Modifier.fillMaxSize(),
                                contentAlignment = Alignment.Center
                            ) {
                                Column(
                                    horizontalAlignment = Alignment.CenterHorizontally

                                ) {
                                    Text(text = "Comprar")
                                }
                            }


                            Spacer(modifier = Modifier.height(100.dp))

                        }
                    }
                }
            }
        }
    }}









